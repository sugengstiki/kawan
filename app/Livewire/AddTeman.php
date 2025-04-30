<?php

namespace App\Livewire;

use App\Models\Teman;
use Livewire\Component;

class AddTeman extends Component
{
    public Teman $teman;

    public function simpan()
    {
        $this->teman->create();
    }
    

    public function render()
    {
        return view('livewire.add-teman');
    }
}
