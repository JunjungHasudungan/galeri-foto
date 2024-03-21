<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CommentReply;

class CommentReplies extends Component
{
    public function render()
    {
        return view('livewire.comment-replies',[
            'listCommentReplies'    => CommentReply::with(['commentReplies', 'userLikeReply'])
                ->where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
