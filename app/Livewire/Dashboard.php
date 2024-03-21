<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Like;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',[
            'userLike'  => Like::with(['user', 'post'])->get()
        ]);
    }
}
