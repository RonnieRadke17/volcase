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
            $table->id('IdAsistencia');
            $table->unsignedBigInteger('Matricula');
            $table->foreign('Matricula')->references('Matricula')->on('usuario');
            $table->date('Fecha');
            $table->time('HoraEntrada');
            $table->time('HoraSalida');
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
