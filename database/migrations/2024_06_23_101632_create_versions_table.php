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
        Schema::create('versions', function (Blueprint $table) {
            $table->id()->comment('版本ID');
            $table->foreignId('document_id')->constrained()->onDelete('cascade')->comment('关联文档ID');
            $table->string('version_number')->comment('版本号');
            $table->boolean('is_public')->default(true)->comment('版本是否公开');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versions');
    }
};
