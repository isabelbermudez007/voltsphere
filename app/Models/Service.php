<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Service extends Model
{
    public function pagos ():MorphMany{
        return $this->morphMany(Pago::class,'pagable');
    }
    public function cliente ():BelongsTo{
        return $this->belongsTo(Cliente::class);
    }
}
