<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory,HasDateTimeFormatter;

    protected $fillable = [
        'document_id',
        'version_number',
        'is_public',
    ];

    // 版本与文档的关系
    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    // 版本与章节的关系
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    // 版本与文章的关系
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
