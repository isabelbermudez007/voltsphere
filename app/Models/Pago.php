<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Pago extends Model
{
    public function pagable ():MorphTo{
        return $this->morphTo();
    }
    
    
}
