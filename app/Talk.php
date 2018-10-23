<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'event_id', 'descricao','user_id','nivel_id','trilha'];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
