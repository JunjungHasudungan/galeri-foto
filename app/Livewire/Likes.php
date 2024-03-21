<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Like;

class Likes extends Component
{
    public $likes = [];

    public function render()
    {
        return view('livewire.likes'
        ,[
            'userLike'  => Like::with(['user', 'post'])
                ->where('user_id', auth()->user()->id)->get()
        ]
    );
    }
}
