<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class Comments extends Component
{
    public  $modal_create = false,
            $post_id, 
            $user_id, 
            $konten;

    public function render()
    {
        return view('livewire.comments', [
            'listComment'   => Comment::with(['user', 'post', 'replies', 'likeCommentReply'])->get(),
        ]);
    }

    public function openCreateModal()
    {
        return $this->modal_create = true;
    }

    public function closeCreateModal()
    {
        return $this->modal_create = false;
    }

    public function resetField() 
    {
        $this->konten = '';
    }
}
