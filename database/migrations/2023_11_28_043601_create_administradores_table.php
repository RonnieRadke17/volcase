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
        Schema::create('administradores', function (Blueprint $table) {
            $table->id('ID_Administrador');
            $table->string('Nombre')->nullable();
            $table->string('Apellido')->nullable();
            $table->string('Correo')->nullable();
            $table->string('Contraseña')->nullable();
            $table->timestamps(); // Esto agrega las columnas created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradores');
    }
};
