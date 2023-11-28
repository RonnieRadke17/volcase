<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $primaryKey = 'ID_Trabajador';

    // Relación muchos a uno con Administrador
    public function administrador()
    {
        return $this->belongsTo(Administrador::class, 'ID_Administrador');
    }

    // Relación uno a muchos con Calendario_Asistencias
    public function asistencias()
    {
        return $this->hasMany(CalendarioAsistencia::class, 'ID_Trabajador');
    }
}
