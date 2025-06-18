<?php

namespace App\Livewire;

use App\Models\Teman;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class EditTeman extends Component
{
    public $nama = '';
    public $angkatan = '';
    public $teman = null;

    public function mount(Teman $teman)
    {
        $this->teman = $teman;
        $this->nama = $teman->nama;
        $this->angkatan = $teman->angkatan;
    }

    public function save()
    {
        // $teman = Teman::find($this->teman->id);
        
        // $teman->nama = $this->nama;
        // $teman->angkatan = $this->angkatan;
        // $teman->save();

        $this->teman->update([
            'nama' => $this->nama,
            'angkatan' => $this->angkatan,
        ]);
        
                
        session()->flash('message', 'Data teman berhasil diupdate!');
        return $this->redirect('/hitung');
    }

    public function render()
    {    
        return view('livewire.edit-teman');
    }
}
