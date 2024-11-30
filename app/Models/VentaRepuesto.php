<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class VentaRepuesto extends Model
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
    public function repuesto ():BelongsTo{
        return $this->belongsTo(Repuesto::class);
    }

}
