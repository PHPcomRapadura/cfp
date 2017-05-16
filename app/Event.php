<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codecasts\Presenter\Presentable;
use App\Presenter\EventPresenter;

class Event extends Model
{
	use Presentable;
    
    protected $fillable = ['id','name','datainicial', 'datafinal', 'datafimdocfp'];

    protected $presenter = EventPresenter::class;
    
    protected $dates = ['datainicial', 'datafinal', 'datafimdocfp'];
}
