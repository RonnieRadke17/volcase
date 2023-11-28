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
        Schema::create('calendario_asistencias', function (Blueprint $table) {
            $table->id('ID_Asistencia');
            $table->foreignId('ID_Trabajador')->constrained('trabajadores');
            $table->foreignId('ID_Trabajo')->constrained('trabajos');
            $table->date('Fecha')->nullable();
            $table->time('Hora_Entrada')->nullable();
            $table->time('Hora_Salida')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendario_asistencias');
    }
};
