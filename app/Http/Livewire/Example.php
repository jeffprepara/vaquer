<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{

    public $number = 0;
    public $modal = false;


    public function increment()
    {
        $this->number++;
    }

    public function decrement()
    {
        $this->number--;
    }

    public function toggleModal()
    {
        $this->modal = !$this->modal;
    }

    public function render()
    {
        return view('livewire.example');
    }
}
