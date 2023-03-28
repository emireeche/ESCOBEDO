<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $usuario
 * @property $contraseña
 * @property $empleado_id
 * @property $tipousuario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Tipousuario $tipousuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'usuario' => 'required',
		'contraseña' => 'required',
		'empleado_id' => 'required',
		'tipousuario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario','contraseña','empleado_id','tipousuario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipousuario()
    {
        return $this->hasOne('App\Models\Tipousuario', 'id', 'tipousuario_id');
    }
    

}
