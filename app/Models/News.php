<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'short_text',
        'text',
        'img_link',
        'author',
        'author_id',
        'hashtags',
        'is_active'
    ];

    public function createNews(array $values)
    {
        $this->create($values);
    }

    public function getNews(int $id): ?News
    {
        return $this->findOrFail($id);
    }

    public function updateNews(int $id, array $values)
    {
        $this->whereIn($id, $values)->update();
    }

    public function deleteNewsIds(string $id, array $values): void
    {
        $this->whereIn($id, $values)->delete();
    }

//    public function getActivitylogOptions(): LogOptions
//    {
//        return LogOptions::defaults()
//            ->useLogName('admin')
//            ->logOnly(['title', 'short_text', 'text', 'img_link', 'is_active']);
//    }
}
