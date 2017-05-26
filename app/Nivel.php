<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    
    protected $table = 'nivel';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
