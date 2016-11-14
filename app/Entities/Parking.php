<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    public function propietario()
    {
        return $this->belongsTo(Owner::class,'owner_id');
    }

    public function getEstadoAttribute()
    {
        if ($this->state == true) return 'Disponible';
        else return 'No Disponible';
    }
}
