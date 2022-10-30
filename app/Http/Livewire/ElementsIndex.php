<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Element;
use App\Models\Type;
use App\Models\Dependency;
use App\Models\Trademark;
use App\Models\Ubication;
use Livewire\WithPagination;

class ElementsIndex extends Component
{
    use WithPagination;
    public $type_id;
    public $dependency_id;
    public $trademark_id;
    public $ubication_id;
    public $open=true;
    public $search;
    protected $listeners = ['elementCreated' => 'render'];

    public function render()
    {
        $types = Type::all()->sortBy('name');
        $dependencies = Dependency::all()->sortBy('name');
        $trademarks = Trademark::all()->sortBy('name');
        $ubications = Ubication::all()->sortBy('name');


        $elements = Element::latest('id')
            ->where('placa', 'like',  $this->search . '%')
            ->type($this->type_id)
            ->dependency($this->dependency_id)
            ->trademark($this->trademark_id)
            ->ubication($this->ubication_id)
            ->paginate(20);

        return view('livewire.elements-index', compact('elements', 'types', 'dependencies', 'trademarks', 'ubications'));


    }
    public function clear()
    {
        $this->reset(['type_id', 'dependency_id', 'trademark_id', 'ubication_id', 'search']);
    }
}
