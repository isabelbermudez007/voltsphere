<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $user_id
 * @property $sector_id
 * @property $nombre
 * @property $apellido
 * @property $direccion
 * @property $telefono
 * @property $email
 * @property $cumple
 * @property $puesto
 * @property $sueldo
 * @property $comision_vendedor
 * @property $created_at
 * @property $updated_at
 *
 * @property Sector $sector
 * @property User $user
 * @property Reclamo[] $reclamos
 * @property Service[] $services
 * @property Testdrive[] $testdrives
 * @property Venta[] $ventas
 * @property VentaRepuesto[] $ventaRepuestos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'sector_id', 'nombre', 'apellido', 'direccion', 'telefono', 'email', 'cumple', 'puesto', 'sueldo', 'comision_vendedor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sector()
    {
        return $this->belongsTo(\App\Models\Sector::class, 'sector_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reclamos()
    {
        return $this->hasMany(\App\Models\Reclamo::class, 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany(\App\Models\Service::class, 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function testdrives()
    {
        return $this->hasMany(\App\Models\Testdrive::class, 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany(\App\Models\Venta::class, 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventaRepuestos()
    {
        return $this->hasMany(\App\Models\VentaRepuesto::class, 'id', 'empleado_id');
    }
    
}
