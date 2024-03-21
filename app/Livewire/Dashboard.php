<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Like;

class Dashboard extends Component
{
    public  $is_create = false,
            $judul, 
            $keterangan, 
            $gambar;

    public function render()
    {
        return view('livewire.dashboard',[
            'userLike'  => Like::with(['user', 'post'])->get()
        ]);
    }

    public function openModalCreate()
    {
        return $this->is_create = true;
    }

    public function closeModalCreate()
    {
        return $this->is_create = false;
    }

    public function createPost()
    {
        $this->openModalCreate();

        $this->resetField();
    }

    public function resetField()
    {
        $this->gambar = '';
        $this->judul = '';
        $this->keterangan = '';
    }
}
