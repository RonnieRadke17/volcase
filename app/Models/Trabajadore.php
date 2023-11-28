<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trabajadore
 *
 * @property $id
 * @property $Nombres
 * @property $Paterno
 * @property $Materno
 * @property $direccion
 * @property $Correo
 * @property $Contraseña
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property CalendarioAsistencia[] $calendarioAsistencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Trabajadore extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres','Paterno','Materno','direccion','Correo','Contraseña','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calendarioAsistencias()
    {
        return $this->hasMany('App\Models\CalendarioAsistencia', 'ID_Trabajador', 'id');
    }
    

}
