<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rodada
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Llanta[] $llantas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rodada extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function llantas()
    {
        return $this->hasMany('App\Models\Llanta', 'rodada_id', 'id');
    }
    

}
