<?php

namespace App\Livewire;

use Livewire\Component;

class RaphaelComponent extends Component
{
    public function render()
    {
        return view('livewire.raphael-component')
            ->layout('layouts.app');
    }
}
