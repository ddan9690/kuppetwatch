<?php

namespace App\Livewire;

use Livewire\Component;

class RaphaelComponent extends Component
{
    public string $page = 'main';

    public function mount()
    {
        if (request()->routeIs('raphael.agenda')) {
            $this->page = 'agenda';
        }
    }

    public function render()
    {
        if ($this->page === 'agenda') {
            return view('livewire.raphael-5-point-agenda')
                    ->layout('layouts.app');
        }

        return view('livewire.raphael-component')
                ->layout('layouts.app');
    }
}
