<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Llanta
 *
 * @property $id
 * @property $descripcion
 * @property $precio
 * @property $imagen
 * @property $vehiculo_id
 * @property $marca_id
 * @property $rodada_id
 * @property $medida_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Marca $marca
 * @property Medida $medida
 * @property Rodada $rodada
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Llanta extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'precio' => 'required',
		'imagen' => 'required',
		'vehiculo_id' => 'required',
		'marca_id' => 'required',
		'rodada_id' => 'required',
		'medida_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','precio','imagen','vehiculo_id','marca_id','rodada_id','medida_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medida()
    {
        return $this->hasOne('App\Models\Medida', 'id', 'medida_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rodada()
    {
        return $this->hasOne('App\Models\Rodada', 'id', 'rodada_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_id');
    }
    

}
