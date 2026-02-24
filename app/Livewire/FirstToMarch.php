<?php

namespace App\Livewire;

use Livewire\Component;

class FirstToMarch extends Component
{
    public function render()
    {
        return view('livewire.first-to-march')->layout('layouts.app');
    }
}
