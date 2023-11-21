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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('Matricula');
            $table->string('Contraseña', 25);
            $table->string('Nombre', 25);
            $table->string('Paterno', 25);
            $table->string('Materno', 25);
            $table->string('Correo', 25);
            $table->integer('Telefono');
            $table->enum('Tipo', ['Administrador', 'Trabajador']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
