<?php

namespace App\Livewire;

use Livewire\Component;

class RaphaelComponent extends Component
{
    public $vision;
    public $mission;
    public $bio;
    public $pledges;

    public function mount()
    {
        $this->bio = "Raphael is an experienced educator and leader seeking the position of Vice Chair for KUPPET Homa Bay branch in the 2026-2031 term. He is committed to improving teachers’ welfare and organizational efficiency.";
        
        $this->vision = "To create a more inclusive, transparent, and effective KUPPET Homa Bay branch that truly represents the interests of teachers.";

        $this->mission = [
            "Strengthen teacher representation and advocacy at all levels.",
            "Ensure timely communication of all branch decisions and activities.",
            "Promote professional development and welfare initiatives for all members.",
            "Foster unity, transparency, and accountability within the branch."
        ];

        $this->pledges = [
            "Monthly branch newsletters to keep members informed.",
            "Regular workshops on teachers’ rights and benefits.",
            "Efficient resolution of member grievances.",
            "Support for educational projects that benefit local schools."
        ];
    }

    public function render()
    {
        return view('livewire.raphael-component')->layout('layouts.app');
    }
}
