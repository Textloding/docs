<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_id',
        'chapter_id',
        'title',
        'content',
        'order',
    ];

    // 文章与章节的关系
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    // 文章与文档的关系
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
