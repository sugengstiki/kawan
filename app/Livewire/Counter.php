<?php

namespace App\Livewire;

use App\Models\Teman;
use Livewire\Component;
use Livewire\WithPagination;

class Counter extends Component
{
    use WithPagination;

    public $perPage = 3;

    protected $listeners = [
        'temanAdded' => '$refresh'
    ];
    
    public function render()
    {
        $temans = Teman::paginate($this->perPage);
        return view('livewire.counter', compact('temans'));
    }
}
