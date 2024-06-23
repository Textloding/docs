<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Chapter extends Model implements Sortable
{
    use HasFactory,HasDateTimeFormatter,SortableTrait;

    protected $fillable = [
        'document_id',
        'version_id',
        'title',
        'order',
    ];
    protected $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    // 章节与文档的关系
    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    // 章节与版本的关系
    public function version()
    {
        return $this->belongsTo(Version::class);
    }

    // 章节与文章的关系
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
