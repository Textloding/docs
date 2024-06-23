<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory,HasDateTimeFormatter;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'cover_image',
        'has_chapters',
        'auto_numbering',
        'is_public',
        'requires_password',
        'password',
    ];

    // 文档与章节的关系
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    // 文档与文章的关系
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    // 文档与版本的关系
    public function versions()
    {
        return $this->hasMany(Version::class);
    }

    // 判断是否需要密码
    public function requiresPassword()
    {
        return $this->requires_password;
    }

    // 获取公开的文档
    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    // 获取需要密码的文档
    public function scopeRequiresPassword($query)
    {
        return $query->where('requires_password', true);
    }
}

