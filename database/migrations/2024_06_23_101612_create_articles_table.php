<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id()->comment('文章ID');
            $table->foreignId('document_id')->constrained()->onDelete('cascade')->comment('关联文档ID');
            $table->foreignId('chapter_id')->nullable()->constrained()->onDelete('cascade')->comment('关联章节ID');
            $table->string('title')->comment('文章标题');
            $table->text('content')->comment('文章内容');
            $table->integer('order')->default(0)->comment('文章排序');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
