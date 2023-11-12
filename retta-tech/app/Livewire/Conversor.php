<?php

namespace App\Livewire;

use Livewire\Component;

class Conversor extends Component
{   
    public $valorRomano;
    public $valorArabico;
    public $valorInput;
    public function render()
    {
        return view('livewire.conversor');
    }

    

}
