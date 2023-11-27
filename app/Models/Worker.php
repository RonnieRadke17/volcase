<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Worker
 *
 * @property $id
 * @property $Nombre
 * @property $Paterno
 * @property $Materno
 * @property $Correo
 * @property $Telefono
 * @property $Contraseña
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Worker extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Paterno' => 'required',
		'Materno' => 'required',
		'Correo' => 'required',
		'Telefono' => 'required',
		'Contraseña' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Paterno','Materno','Correo','Telefono','Contraseña'];



}
