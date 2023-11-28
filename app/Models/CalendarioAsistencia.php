<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CalendarioAsistencia
 *
 * @property $ID_Asistencia
 * @property $ID_Trabajador
 * @property $ID_Trabajo
 * @property $Fecha
 * @property $Hora_Entrada
 * @property $Hora_Salida
 * @property $created_at
 * @property $updated_at
 *
 * @property Trabajadore $trabajadore
 * @property Trabajo $trabajo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CalendarioAsistencia extends Model
{
    
    static $rules = [
		'ID_Asistencia' => 'required',
		'ID_Trabajador' => 'required',
		'ID_Trabajo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_Asistencia','ID_Trabajador','ID_Trabajo','Fecha','Hora_Entrada','Hora_Salida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function trabajadore()
    {
        return $this->hasOne('App\Models\Trabajadore', 'id', 'ID_Trabajador');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function trabajo()
    {
        return $this->hasOne('App\Models\Trabajo', 'id', 'ID_Trabajo');
    }
    

}
