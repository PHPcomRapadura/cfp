<?php
namespace App\Presenter;
use Codecasts\Presenter\Presenter;	

class EventPresenter extends Presenter
{
    public function datainicial()
    {
        return date('d/m/Y', strtotime($this->entity->datainicial));
    }
    
    public function datafinal()
    {
        return date('d/m/Y', strtotime($this->entity->datafinal));
    }
    
    public function datafimdocfp()
    {
        return date('d/m/Y', strtotime($this->entity->datafimdocfp));
    }
    
}