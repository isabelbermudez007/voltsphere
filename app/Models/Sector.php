<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sector extends Model
{
    public function empleados ():HasMany{
        return $this->hasMany(Empleado::class);
    }
}
