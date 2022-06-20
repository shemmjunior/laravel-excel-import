<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function resetCounter()
    {
        $this->count = 0;
    }

    public $foo;



    public function boot()

    {

        echo "Boot";
    }



    public function booted()

    {

        echo "Booted";
    }



    public function mount()

    {

        //
        echo "Mount";
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
