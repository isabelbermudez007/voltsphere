<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    public function sector():BelongsTo{
        return $this->belongsTo(Sector::class);
    }
    public function ventas():HasMany{
        return $this->hasMany(Ventas::class);
    }
    public function testdrives():HasMany{
        return $this->hasMany(Testdrive::class);
    }
    public function reclamos():HasMany{
        return $this->hasMany(Reclamo::class);
    }
    public function ventasrepuestos():HasMany{
        return $this->hasMany(VentaRepuesto::class);
    }
    public function user ():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
