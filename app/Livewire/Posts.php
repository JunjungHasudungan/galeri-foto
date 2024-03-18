<?php

namespace App\Livewire;

use Livewire\Component;

class Posts extends Component
{

    public  $judul, 
            $keterangan,
            $is_create = false;


    public function render()
    {
        return view('livewire.posts');
    }

    public function openModalCreate() 
    {
        return $this->is_create = true;
    }

    public function closeModalCreate() 
    {
        return $this->is_create = false;
    }

    public function resetField()
    {
        $this->judul = '';
        $this->keterangan = '';
    }

    public function createUser() 
    {
        $this->openModalCreate();

        $this->resetField();
    }

    public function storePost()
    {
        
    }
}
