<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\{Like, Post, Comment};

class Dashboard extends Component
{
    public  $is_create = false,
            $author,
            $post,
            $isi_konten,
            $post_id,
            $created_at,
            $user_id;
            
    
    public $rules = [
        'konten' => 'required|min:2|max:50',
        // 'gambar' => 'nullable|image|mimes:jpeg,png|max:2048', // Maksimum ukuran file gambar adalah 2MB
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

        $this->post = Post::with('user')->where('id', $id_post)->get();

        foreach($this->post as $post) {
            $this->author = $post->user;
            $this->created_at = $post->created_at;
            $this->isi_konten = $post->keterangan;
        }
        
        // dd($this->konten);
        $this->resetField();
    }

    public function resetField()
    {
        $this->user_id = '';
        $this->isi_konten = '';
        $this->post_id = '';
    }


    public function storeCommentPost() 
    {
        // membuat validasi dari rules yang sudah dibuat
        $this->validate([
            'konten' => 'required|min:2|max:50',
            // 'keterangan' => 'required|min:10|max:225',
            // 'gambar' => 'nullable|image|mimes:jpeg,png|max:2048', // Maksimum ukuran file gambar adalah 2MB
        ],[
            'konten.required'    => 'judul wajib diisi..',
            'judul.min'         => 'judul minimal 2 karakter',
            'judul.max'         => 'judul minimal 2 karakter',
        ]);

        // melakukan inisialisasi class objek
        $comment = new Comment();

        // melakukan insert data dari pengiriman data properti yang ada
        $comment = Comment::insert([
            'konten'            => $this->konten,
            'user_id'           => auth()->user()->id,
            'post_id'           => $this->post_id
        ]);

        $comment->save();

        $this->resetField();

        $this->closeModalCreate();
    }
}
