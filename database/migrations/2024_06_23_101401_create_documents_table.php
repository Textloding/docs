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
        Schema::create('documents', function (Blueprint $table) {
            $table->id()->comment('文档ID');
            $table->string('name')->comment('文档名称');
            $table->string('slug')->unique()->comment('自定义Slug');
            $table->text('description')->nullable()->comment('文档描述');
            $table->string('cover_image')->nullable()->comment('封面图片');
            $table->boolean('has_chapters')->default(false)->comment('是否区分章节');
            $table->boolean('auto_numbering')->default(false)->comment('是否自动编号');
            $table->boolean('is_public')->default(true)->comment('是否公开');
            $table->boolean('requires_password')->default(false)->comment('是否需要访问密码');
            $table->string('password')->nullable()->comment('访问密码');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
