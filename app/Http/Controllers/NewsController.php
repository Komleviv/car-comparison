<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\News\NewsServices;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(private NewsServices $newsService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $news = $this->newsService->showAllNews();

        if ($filterSearchString = trim($request->hashtag)) {
            $news->where('hashtags', 'LIKE', '%'.$filterSearchString.'%');
        }

        $newsArray = $news->paginate(12);

        return view('front.news.index', ['news' => $newsArray]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $news = new News();
        $theNews = $news->getNews($id);
        $relatedNews = $this->newsService->relatedNews($theNews);

        $this->newsService->setView($id);

        return view('front.news.show', ['news' => $theNews,
            'relatedNews' => $relatedNews]);
    }

    public function likeIncrement(int $id){
        $likes = $this->newsService->setLike($id);

        return response()->json([
            'likes'=> $likes
        ]);
    }
}
