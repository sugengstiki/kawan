<?php

namespace App\Livewire;

use App\Models\Teman;
use Livewire\Component;

class AddTeman extends Component
{   
    public $nama = '';
    public $angkatan = '';

    public function save(){
        Teman::create(
            $this->only(['nama','angkatan'])
        );

        return $this->redirect('/hitung');
    }

    public function render()
    {
        return view('livewire.add-teman');
    }
}
