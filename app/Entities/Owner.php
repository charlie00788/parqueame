<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function getTipoAttribute()
    {
        if ($this->type == 'public') return 'Parqueo Público';
        else return 'Parqueo Privado';
    }
}
