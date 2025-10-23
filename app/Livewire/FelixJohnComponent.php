<?php

namespace App\Livewire;

use Livewire\Component;

class FelixJohnComponent extends Component
{
    public function render()
    {
        return view('livewire.felix-john-component')
            ->layout('layouts.app');
    }
}
