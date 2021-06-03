<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cartcomponent extends Component
{
    public function render()
    {
        return view('livewire.cartcomponent')->layout("layouts.base");
    }
}
