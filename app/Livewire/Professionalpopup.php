<?php

namespace App\Livewire;

use Livewire\Component;

class Professionalpopup extends Component
{
    
    public $professional;
    public $showPopup = false;

    // This function would be triggered when the professional is selected
    public function show($professional)
    {
        $this->professional = $professional;
        $this->showPopup = true;
    }

    public function closeModal()
    {
        $this->showPopup = false;
    }
    public function render()
    {
        return view('livewire.professionalpopup');
    }
}
