<?php

namespace App\Http\Livewire;

use App\Models\Dependency;
use App\Models\Type;
use App\Models\Ubication;
use Livewire\Component;
use App\Models\Trademark;
use App\Models\Element;

class CreateElement extends Component
{
    public $open = false;
    public $type_id=0, $dependency_id=0, $trademark_id=0, $ubication_id=0, $placa, $serial, $description, $name, $model, $movable=false, $features;
    public function render()
    {

        $types = Type::all()->sortBy('name');
        $dependencies = Dependency::all()->sortBy('name');
        $trademarks = Trademark::all()->sortBy('name');
        $ubications = Ubication::all()->sortBy('name');
        return view('livewire.create-element', compact('types', 'dependencies', 'trademarks', 'ubications'));
    }
    public function create()
    {
        $this->validate([
            'placa' => 'required|unique:elements|min:8|max:8',
            'name' => 'required|min:3|max:50',
            'serial' => 'required',
            'model' => 'required|max:4',
            'features' => 'required',
            'type_id' => 'required',
            'dependency_id' => 'required',
            'trademark_id' => 'required',
            'ubication_id' => 'required'
        ]);

        Element::create([
            'placa' => $this->placa,
            'name' => $this->name,
            'serial' => $this->serial,
            'model' => $this->model,

            'movable' => $this->movable,
            'features' => $this->features,
            'trademark_id' => $this->trademark_id,
            'type_id' => $this->type_id,
            'ubication_id' => $this->ubication_id,
            'dependency_id' => $this->dependency_id
        ]);

        $this->reset(['open', 'type_id', 'dependency_id', 'trademark_id', 'ubication_id', 'placa', 'serial', 'description', 'name', 'model', 'movable', 'features']);
        $this->emit('elementCreated');
    }
}
