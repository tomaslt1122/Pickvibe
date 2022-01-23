<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marke extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->hasMany('App\Models\automobiliai');
    }
}
