<?php

namespace App\Livewire;

use App\Models\Teman;
use Livewire\Component;

class AddTeman extends Component
{
    public Teman $teman;

    public $nama;
    public $angkatan;


    public function mount()
    {
        $this->teman = new Teman();
    }

    public function tambah()
    {
        $this->teman->create([
            'nama' => $this->nama,
            'angkatan' => $this->angkatan,
            'lulus' => false
        ]);
        $this->redirect('/');
    }
    

    public function render()
    {
        return view('livewire.add-teman');
    }
}
