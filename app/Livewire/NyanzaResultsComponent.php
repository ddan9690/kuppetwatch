<?php

namespace App\Livewire;

use Livewire\Component;

class NyanzaResultsComponent extends Component
{
    public $counties = [];

    public function mount()
    {
        $this->counties = [
            [
                'name' => 'Migori',
                'status' => 'Leadership Shift',
                'details' => [
                    'ES: Henri Otunga In, Jasolo Out',
                    'New ES, New Chair, New Treasurer',
                    '5 of 14 serving officials survived',
                    'Majority reform-backed officials elected'
                ],
                'color' => 'green'
            ],
            [
                'name' => 'Kisumu',
                'status' => 'Strong Reform Mandate',
                'details' => [
                    'George Osura In, Awange Out',
                    'Chair retained, New Treasurer',
                    'Only 2 serving officials re-elected',
                    'All from reform side'
                ],
                'color' => 'green'
            ],
            [
                'name' => 'Siaya',
                'status' => 'Clear Political Realignment',
                'details' => [
                    'Richard Agot In, Opondo Sam Out',
                    'New ES, Chair, Treasurer',
                    'Only 2 serving officials re-elected',
                    'All from reform side'
                ],
                'color' => 'green'
            ],
            [
                'name' => 'Kisii',
                'status' => 'Structural Reset',
                'details' => [
                    'Abel Kinyanjui In, Abincha Out',
                    'New ES, Chair, Treasurer',
                    '3 serving officials re-elected',
                    'Reform-oriented caucus'
                ],
                'color' => 'green'
            ],
            [
                'name' => 'Nyamira',
                'status' => 'Controlled Transition',
                'details' => [
                    'Mayaka In',
                    'Chair & Treasurer retained',
                    '4 serving officials re-elected'
                ],
                'color' => 'yellow'
            ],
            [
                'name' => 'Homabay',
                'status' => 'Elections Abandoned – Jan 11, 2026',
                'details' => [
                    'Region at a historic crossroads',
                    'Momentum building across Nyanza',
                    'Will Homabay align with the reform wave?'
                ],
                'color' => 'red'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.nyanza-results-component')
            ->layout('layouts.app');
    }
}
