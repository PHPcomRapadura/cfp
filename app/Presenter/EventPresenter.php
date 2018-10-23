<?php
namespace App\Presenter;
use Codecasts\Presenter\Presenter;	

class EventPresenter extends Presenter
{
    public function datainicial()
    {
        return $this->formatDate($this->entity->datainicial);
    }
    
    public function datafinal()
    {
        return $this->formatDate($this->entity->datafinal);
    }
    
    public function datafimdocfp()
    {
        return $this->formatDate($this->entity->datafimdocfp);
    }
    
}