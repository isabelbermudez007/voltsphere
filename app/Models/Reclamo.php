<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reclamo
 *
 * @property $id
 * @property $cliente_id
 * @property $empleado_id
 * @property $comentarios
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Empleado $empleado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reclamo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['cliente_id', 'empleado_id', 'comentarios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo(\App\Models\Empleado::class, 'empleado_id', 'id');
    }
    
}
