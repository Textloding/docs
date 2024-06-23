<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

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
}
