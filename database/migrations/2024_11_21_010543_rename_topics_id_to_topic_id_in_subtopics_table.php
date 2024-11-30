<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('subtopics', function (Blueprint $table) {
            $table->renameColumn('topics_id', 'topic_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subtopics', function (Blueprint $table) {
            $table->renameColumn('topic_id', 'topics_id');

        });
    }
};
