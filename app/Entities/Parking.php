<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    public function propietario()
    {
        return $this->belongsTo(Owner::class,'owner_id');
    }
}
