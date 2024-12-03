<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Repuesto
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @property VentaRepuesto[] $ventaRepuestos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Repuesto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'precio', 'stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventaRepuestos()
    {
        return $this->hasMany(\App\Models\VentaRepuesto::class, 'id', 'repuesto_id');
    }
    
}
