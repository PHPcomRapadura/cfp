<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
	protected $table = 'sexo';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
