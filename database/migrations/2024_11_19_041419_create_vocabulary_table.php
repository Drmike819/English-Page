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
        Schema::create('vocabulary', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('audio');
            $table->foreignId('subtopics_id')->constrained('subtopics')->onDELETE('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vocabulary');
    }
};
