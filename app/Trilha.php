<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trilha extends Model
{
    protected $table = 'trilha';

    public function user()
    {
        return $this->belongsTo('App\Talk');
    }
}
