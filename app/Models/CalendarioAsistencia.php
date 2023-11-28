<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarioAsistencia extends Model
{
    protected $primaryKey = 'ID_Asistencia';

    // Relación muchos a uno con Trabajador
    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class, 'ID_Trabajador');
    }

    // Relación muchos a uno con Trabajo
    public function trabajo()
    {
        return $this->belongsTo(Trabajo::class, 'ID_Trabajo');
    }
}