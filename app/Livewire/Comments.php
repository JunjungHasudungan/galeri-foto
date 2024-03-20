<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class Comments extends Component
{
    public $comments = [];

    public function render()
    {
        // $this->comments = Comment::with(['user', 'post'])->get();

        // dd($this->comments->user_id);
        return view('livewire.comments', [
            'listComment'   => Comment::with(['user', 'post'])->get(),
        ]);
    }
}
