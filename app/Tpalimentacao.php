<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tpalimentacao extends Model
{
    protected $table = 'tpalimentacao';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
