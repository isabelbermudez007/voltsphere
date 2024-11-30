<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Auto extends Model
{
    public function ventas():HasMany{
        return $this->hasMany(Ventas::class);
    }
}
