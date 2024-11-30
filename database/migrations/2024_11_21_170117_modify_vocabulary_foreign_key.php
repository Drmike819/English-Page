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
        Schema::table('vocabulary', function (Blueprint $table) {
            // Eliminar la clave foránea existente y la columna
            $table->dropForeign(['subtopics_id']);
            $table->dropColumn('subtopics_id');

            // Agregar la nueva columna y clave foránea
            $table->foreignId('topic_id')->constrained('topics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vocabulary', function (Blueprint $table) {
            // Eliminar la clave foránea y columna recién añadidas
            $table->dropForeign(['topics_id']);
            $table->dropColumn('topics_id');

            // Restaurar la columna y clave foránea anteriores
            $table->foreignId('subtopics_id')->constrained('subtopics')->onDelete('cascade');
        });
    }
};
