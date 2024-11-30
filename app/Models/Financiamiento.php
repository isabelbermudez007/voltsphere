<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Financiamiento extends Model
{
    public function cuotas ():HasMany{
        return $this->hasMany(Cuota::class);
    }
    public function venta():BelongsTo{
        return $this->belongsTo(Ventas::class);
    }
}
