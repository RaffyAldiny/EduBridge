<?php

namespace App\Livewire;

use Livewire\Component;

class Studentlogin extends Component
{
    public $showModal = false;

    public function render()
    {
        return view('livewire.studentlogin');
    }
}
