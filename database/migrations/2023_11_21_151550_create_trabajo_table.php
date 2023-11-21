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
        Schema::create('trabajo', function (Blueprint $table) {
            $table->id('IdTrabajo');
            $table->unsignedBigInteger('Matricula');
            $table->foreign('Matricula')->references('Matricula')->on('usuario');
            $table->string('Nombre', 20);
            $table->text('Descripcion');
            $table->text('Comentarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajo');
    }
};
