<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Element;

class ElementsIndex extends Component
{
    public function render()
    {
        $elements = Element::all()->sortBy('name');
        return view('livewire.elements-index', compact('elements'));
    }
}
