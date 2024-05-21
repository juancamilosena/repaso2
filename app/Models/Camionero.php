<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Camionero
 *
 * @property $id
 * @property $nombre
 * @property $telefono
 * @property $direccion
 * @property $salario
 * @property $poblacion
 * @property $created_at
 * @property $updated_at
 *
 * @property CamionCamionero[] $camionCamioneros
 * @property Paquete[] $paquetes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Camionero extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'telefono', 'direccion', 'salario', 'poblacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function camionCamioneros()
    {
        return $this->hasMany(\App\Models\CamionCamionero::class, 'id', 'camionero_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paquetes()
    {
        return $this->hasMany(\App\Models\Paquete::class, 'id', 'camionero_id');
    }
    
}
