<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Article extends Model implements Sortable
{
    use HasFactory,HasDateTimeFormatter,SortableTrait;

    protected $fillable = [
        'document_id',
        'chapter_id',
        'title',
        'content',
        'order',
    ];
    protected $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => false,
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

    // 文章与版本的关系
    public function version()
    {
        return $this->belongsTo(Version::class);
    }
}
