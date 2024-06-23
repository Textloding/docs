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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id()->comment('章节ID');
            $table->foreignId('document_id')->constrained()->onDelete('cascade')->comment('关联文档ID');
            $table->string('title')->comment('章节标题');
            $table->integer('order')->default(0)->comment('章节排序');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
