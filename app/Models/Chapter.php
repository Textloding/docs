<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_id',
        'title',
        'order',
    ];

    // 章节与文章的关系
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    // 章节与文档的关系
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
