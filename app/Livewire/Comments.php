<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Models\CommentReply;
use App\Models\Post;
use App\Models\Reply;

class Comments extends Component
{
    public  $modal_comment_reply = false,
            $modal_reply_comment_to_reply = false,
            $id_comment,
            $comment,
            $comment_reply,
            $description,
            $created_at,
            $has_comment_reply = false,
            $post_id,
            $post,
            $user_id,
            $user,
            $konten_post,
            $konten_reply,
            $konten;

    public function render()
    {
        return view('livewire.comments', [
            'listComment'   => Comment::with(['user', 'post', 'replies', 'likeCommentReply'])->get(),
        ]);
    }

    public function openCreateModal()
    {
        return $this->modal_comment_reply = true;
    }

    public function closeCreateModal()
    {
        return $this->modal_comment_reply = false;
    }

    public function openModalToReplyComment($id_post)
    {
        $this->openCreateModal();
        $this->reset('konten');

        $this->comment = Comment::with(['post', 'replies', 'user'])
                    ->where('post_id', $id_post)
                    ->where('user_id', auth()->user()->id)->get();
        foreach ($this->comment as $item) {
            $this->created_at = $item->created_at;
            $this->konten = $item->konten;
            $this->post = $item->post;
            $this->comment_reply = $item->replies;
            $this->user = $item->user;
        }
        $this->comment;

        if (count($this->comment_reply) > 0) {
            $this->comment_reply;
            $this->has_comment_reply = true;
        }

        $this->konten_post = $this->shortContent($this->post->keterangan, 10);
    }

    public function resetField()
    {
        $this->konten_reply = '';
        $this->id_comment = '';
        $this->user_id = '';
    }

    public function shortContent($konten, $length)
    {
        if (empty($konten)) {
            return '';
        }

        if (strlen($konten) <= $length) {
            return $konten;
        }

        return substr($konten, 0, $length - 2) . '...';
    }

    public function closeModalCommentReply()
    {
        $this->resetField();
        $this->closeCreateModal();
    }

    public function storeReplyComment($id_post)
    {
        $post = Post::with(['comments'], function($query){
            $query->where('user_id', auth()->user()->id)->get();
        })->where('id', $id_post)->get();

        foreach ($post as $item) {

            foreach ($item->comments as $comment) {
                $this->id_comment = $comment->id;
            }
        }

        $this->validate([
            'konten_reply'    => 'required',
            ],[
            'konten_reply.required'   => 'Balasan Komen Wajib disi..'
            ]);

        CommentReply::create([
            'konten_reply'  => $this->konten_reply,
            'comment_id'       => $this->id_comment,
            'user_id'       => auth()->user()->id,
        ]);

        $this->resetField();

        $this->closeModalCommentReply();
    }

    public function openModalCommentReplyToReply()
    {
        $this->modal_reply_comment_to_reply = true;
    }

    public function closeModalCommentReplyToReply()
    {
        $this->modal_reply_comment_to_reply = false;
    }

    public function resetReplyComment()
    {
        $this->description = '';
    }

    public function openModalReplyComment($id_comment_reply)
    {
        $this->openModalCommentReplyToReply();

        $this->comment_reply = CommentReply::with(['comment', 'user'])->where('id', $id_comment_reply)->get();

        foreach ($this->comment_reply as $value) {
           $this->comment_reply = $value;
        }
    }

    public function storeReply($id_comment_reply)
    {

        $this->validate(
                ['description'   => 'required'],
                ['description.required'  => 'Komentar wajib diisi..']
            );
        Reply::create([
            'description'   => $this->description,
            'comment_reply_id'  => $id_comment_reply,
            'user_id'           => auth()->user()->id
        ]);

        $this->resetReplyComment();

        $this->closeModalCommentReplyToReply();
    }
}
