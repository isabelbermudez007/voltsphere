<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Seguro extends Model
{
    public function venta ():HasOne{
        return $this->hasOne(Ventas::class);
    }
}
