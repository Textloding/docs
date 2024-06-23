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
        Schema::table('articles', function (Blueprint $table) {
            $table->foreignId('version_id')->nullable()->after('document_id')->constrained()->onDelete('cascade')->comment('关联版本ID');
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['version_id']);
            $table->dropColumn('version_id');
        });
    }
};
