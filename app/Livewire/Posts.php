<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Like;
use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{

    public  $judul,
            $keterangan,
            $post,
            $count,
            $listPost,
            $konten,
            $post_id,
            $user_id,
            $isDisabled = true,
            $is_create = false,
            $progress = 0,
            $isCreateReplyPost = false;

            public $message = "Hello World!";

         

    public function render()
    {
        $this->listPost = Post::with(['likes', 'user'], function($query){
            $query->where('status', 1)->get();
        })->where('user_id', auth()->user()->id)->get();

        return view('livewire.posts', [
            'listPost'      => $this->listPost ?? 0,
        ]);
    }

    public function updated()
    {
        if (! empty($this->konten)) {
           $this->isDisabled = false;
        } else {
            $this->isDisabled = true;
        }

    }

    public function openModalCreate()
    {
        return $this->is_create = true;
    }

    public function openModalCreateReplyPost()
    {
        return $this->isCreateReplyPost = true;
    }

    public function closeModalCreateReplyPost()
    {
        // $this->emit('refreshPost');

        $this->isCreateReplyPost = false;
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

    public function resetFieldReplyPost()
    {
        $this->konten = '';
        $this->user_id = '';
        $this->post_id = '';
    }

    public function createPost()
    {
        $this->openModalCreate();

        $this->resetField();
    }

    public function createReplyCommentPost($post_id)
    {
        $this->openModalCreateReplyPost();

        $this->resetFieldReplyPost();

        $this->post = Post::where('id', $post_id)->get();

        foreach ($this->post as $post) {
            $this->post = $post;
        }
    }

    public function storeCommentPost($post_id)
    {
        $this->validate([
            'konten'        => 'required'
        ], [
            'konten.required'   => 'Postingan wajib diisi..'
        ]);

        Comment::create([
            'konten'    => $this->konten,
            'post_id'   => $post_id,
            'user_id'   => auth()->user()->id,
        ]);

        sleep(2);
        $this->resetFieldReplyPost();

        $this->closeModalCreateReplyPost();
    }

    public function likePost($post_id)
    {
        $likes = Like::with('post')
            ->where('post_id', $post_id)
            ->where('user_id', auth()->user()->id)->get();

        foreach ($likes as $like) {
           $statusLike = $like->status;
           $like_id = $like->id;
        }

        if (count($likes) == 0 || $statusLike == 0) {
            $like = Like::create([
                'user_id'   => auth()->user()->id,
                    'post_id'   => $post_id,
                    'status'      => true,
                ]);
        }
        else {
            $like = Like::find($like_id);
            $like->delete();
        }
    }
    public function storePost()
    {

    }

}
