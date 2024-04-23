<?php

namespace App\Livewire;

use App\Models\{ Comment, Like, Post };
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;

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

    #[Rule('nullable|image|max:1024')]
    public $gambar;

    public $message = "Hello World!";


    protected $rules = [
        'judul' => 'required',
        'keterangan'    => 'required'
    ];

    public function render()
    {
        $this->listPost = Post::with(['likes', 'user'], function($query){
            $query->where('status', 1)->get();
        })->where('user_id', auth()->user()->id)->get();

        return view('livewire.posts', [
            'listPost'      => $this->listPost ?? 0,
        ]);
    }

    public function updated($field)
    {
        $this->resetValidation('judul', 'keterangan');
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
        $this->isCreateReplyPost = false;

        $this->resetField();
        $this->resetValidation(['judul', 'keterangan']);
    }

    public function closeModalCreate()
    {
        $this->reset('judul', 'keterangan');

        $this->is_create = false;

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
        $this->resetField();

        $this->openModalCreate();

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
            'konten'        => 'required',
        ], [
            'konten.required'   => 'Postingan wajib diisi..',
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
        $validated = $this->validate();

        if ($this->gambar) {
            $validated['gambar'] = $this->gambar->store('public/images');
        }

       Post::create([
           'judul' => $this->judul,
           'keterangan'    => $this->keterangan,
           'gambar'        =>  $validated['gambar'],
           'user_id'       => auth()->user()->id,
        ]);

       $this->resetField();
       $this->reset('judul', 'keterangan');

       $this->closeModalCreate();
    }

}
