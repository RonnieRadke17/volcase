<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $primaryKey = 'ID_Trabajo';

    // Relación uno a muchos con Calendario_Asistencias
    public function asistencias()
    {
        return $this->hasMany(CalendarioAsistencia::class, 'ID_Trabajo');
    }
}