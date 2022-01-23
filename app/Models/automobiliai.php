<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class automobiliai extends Model
{
    use HasFactory;

    public function marke()
    {
        return $this->belongsTo('App\Models\marke', 'marke_id');
    }
}
