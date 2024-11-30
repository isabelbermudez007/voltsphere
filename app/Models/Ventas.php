<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Ventas extends Model
{
    public function pagos ():MorphMany{
        return $this->morphMany(Pago::class,'pagable');
    }
    public function cliente ():BelongsTo{
        return $this->belongsTo(Cliente::class);
    }
    public function empleado ():BelongsTo{
        return $this->belongsTo(Empleado::class);
    }
    public function seguro ():BelongsTo{
        return $this->belongsTo(Seguro::class);
    }
    public function auto ():BelongsTo{
        return $this->belongsTo(Auto::class);
    }
    public function financiamiento ():HasOne{
        return $this->hasOne(Financiamiento::class);
    }
}
