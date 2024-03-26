<?php


namespace App\Http\Services\News;

use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class NewsServices
{
    public function showAllNews(): Builder
    {
        return News::orderBy('id', 'desc');
    }

    public function setView(int $id)
    {
        $currentViews = DB::table('news')->where('id', $id)->value('views');

        $views = isset($currentViews) ? $currentViews + 1 : 1;

        DB::table('news')
            ->where('id', '=', $id)
            ->update(['views' => $views]);
    }

    public function setLike(int $id)
    {
        $currentLikes = DB::table('news')->where('id', $id)->value('likes');

        $likes = isset($currentLikes) ? $currentLikes + 1 : 1;

        DB::table('news')
            ->where('id', '=', $id)
            ->update(['likes' => $likes]);

        return $likes;
    }

    public function relatedNews(News $theNews): \Illuminate\Support\Collection
    {
        $query = DB::table('news');

        $hashtags = $theNews->hashtags ?? null;
        if ($hashtags) {
            $tags = explode(" ", $hashtags);

            foreach ($tags as $tag) {
                $query->orWhere('hashtags', 'LIKE', '%'.$tag.'%');
            }

            if ($query->count() > 6) {
                return $query->limit(6)->get();
            }
        }

        $viewsFrom = $theNews->views > 100 ? $theNews->views - 100 : 0;
        $viewsTo = $theNews->views + 100;
        $query->orWhereBetween('views', [$viewsFrom, $viewsTo]);

        $relatedNews = $query->limit(6)->get();

        return $relatedNews;
    }

    public function searchNews(string $value): LengthAwarePaginator
    {
        $news = News::where(function($query) use ($value) {
            $query->where('title', 'iLike', "%{$value}%")
                ->orWhere('short_text', 'iLike', "%{$value}%")
                ->orWhere('text', 'iLike', "%{$value}%")
                ->orWhere('hashtags', 'iLike', "%{$value}%");
        })
            ->orderBy('id', 'asc')
            ->paginate();

        return $news;
    }
}
