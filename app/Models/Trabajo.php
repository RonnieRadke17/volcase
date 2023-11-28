<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trabajo
 *
 * @property $id
 * @property $Nombre_Trabajo
 * @property $Descripcion
 * @property $Fecha_Inicio
 * @property $Fecha_Fin
 * @property $Comentario
 * @property $created_at
 * @property $updated_at
 *
 * @property CalendarioAsistencia[] $calendarioAsistencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Trabajo extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_Trabajo','Descripcion','Fecha_Inicio','Fecha_Fin','Comentario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calendarioAsistencias()
    {
        return $this->hasMany('App\Models\CalendarioAsistencia', 'ID_Trabajo', 'id');
    }
    

}
