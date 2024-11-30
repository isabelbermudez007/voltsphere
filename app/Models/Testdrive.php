<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testdrive extends Model
{
    public function cliente ():BelongsTo{
        return $this->belongsTo(Cliente::class);
    }
    public function empleado ():BelongsTo{
        return $this->belongsTo(Empleado::class);
    }
    
}
