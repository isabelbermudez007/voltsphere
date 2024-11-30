<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Repuesto extends Model
{
    public function ventarepuesto ():HasMany{
        return $this->hasMany(VentaRepuesto::class);
    }
}
