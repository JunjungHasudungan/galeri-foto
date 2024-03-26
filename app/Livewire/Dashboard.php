<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\{Like, Post, Comment};

class Dashboard extends Component
{
    public  $is_create = false,
            $isDisabled = false,
            $author,
            $post,
            $konten,
            $keterangan,
            $post_id,
            $created_at,
            $user_id;


    public $rules = [
        'konten' => 'required|min:2|max:50',
    ];

    public function render()
    {
        $listPost = Post::with(['user', 'likes', 'comments'])->get();

        return view('livewire.dashboard',[
            'listPost'  => $listPost,
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

    

    public function createCommentPost($id_post)
    {
        $this->openModalCreate();

        $this->resetField();
        
        $this->post = Post::with('user')->where('id', $id_post)->get();

        foreach($this->post as $post) {
            $this->post = $post;
            $this->post_id = $post->id;
            $this->author = $post->user;
            $this->created_at = $post->created_at;
            $this->keterangan = $post->keterangan;
        }
        $this->resetField();
    }

    public function resetField()
    {
        $this->user_id = '';
        $this->konten = '';
        $this->post_id = '';
    }


    public function storeCommentPost(Post $post)
    {
        // membuat validasi dari rules yang sudah dibuat
        $this->validate([
            'konten'     => 'required|min:2|max:50',
        ],[
            'konten.required'    => 'judul wajib diisi..',
        ]);
        
        $comment = new Comment();
        // melakukan insert data dari pengiriman data properti yang ada
        $comment = Comment::create([
            'konten'            => $this->konten,
            'user_id'           => auth()->user()->id,
            'post_id'           =>  $post->id
        ]);
        
        $comment->save();

        
        $this->resetField();

        $this->closeModalCreate();
    }
}
