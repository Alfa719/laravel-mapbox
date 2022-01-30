<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MapLocation extends Component
{
    public $long, $lat;
    public $test = "Hello from livewire";
    public function render()
    {
        return view('livewire.map-location');
    }
}
