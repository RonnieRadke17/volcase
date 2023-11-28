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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres')->nullable();
            $table->string('Paterno')->nullable();
            $table->string('Materno')->nullable();
            $table->string('direccion')->nullable();
            $table->string('Correo')->nullable();
            $table->string('Contraseña')->nullable();
            $table->string('telefono', 10)->nullable(); // Definimos la longitud del teléfono
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadores');
    }
};
