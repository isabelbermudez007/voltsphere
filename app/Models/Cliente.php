<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    public function ventas():HasMany{
        return $this->hasMany(Ventas::class);
    }
    public function ventarepuesto():HasMany{
        return $this->hasMany(VentaRepuesto::class);
    }
    public function reclamo():HasMany{
        return $this->hasMany(Reclamo::class);
    }
    public function service():HasMany{
        return $this->hasMany(Service::class);
    }
    public function testdrive():HasMany{
        return $this->hasMany(Testdrive::class);
    }
    public function user ():BelongsTo{
        return $this->belongsTo(User::class);
    }
    
    
}
