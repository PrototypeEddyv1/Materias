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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->text("nombreMateria");
            $table->text("nombreActividad1")->nullable();
            $table->text("calificacionActividad1")->nullable();
            $table->text("nombreActividad2")->nullable();
            $table->text("calificacionActividad2")->nullable();
            $table->text("nombreActividad3")->nullable();
            $table->text("calificacionActividad3")->nullable();
            $table->text("nombreActividad4")->nullable();
            $table->text("calificacionActividad4")->nullable();
            $table->text("nombreActividad5")->nullable();
            $table->text("calificacionActividad5")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
