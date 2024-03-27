<?php

namespace App\Livewire;

use App\Models\Like;
use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{

    public  $judul, 
            $keterangan,
            $listPost,
            $is_create = false;


    public function render()
    {
        $this->listPost = Post::with(['likes', 'user'], function($query){
            $query->where('status', 1)->get();
        })->where('user_id', auth()->user()->id)->get();
        
        return view('livewire.posts', [
            'listPost'      => $this->listPost ?? 0,
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

    public function resetField()
    {
        $this->judul = '';
        $this->keterangan = '';
    }

    public function createPost() 
    {
        $this->openModalCreate();

        $this->resetField();
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
        
        
        // if ($statusLike == 1) {
        //     $like = Like::update([
        //         'user_id'   => auth()->user()->id,
        //         'post_id'   => $post->id,
        //         'like'      => false,
        //     ]);
        // } elseif($statusLike == 0) {
        //     $like = Like::update([
        //         'user_id'   => auth()->user()->id,
        //         'post_id'   => $post->id,
        //         'like'      => true,
        //     ]);
        // } else {
        //     $like = Like::create([
        //         'user_id'   => auth()->user()->id,
        //         'post_id'   => $post->id,
        //         'like'      => true,
        //     ]);
        // }

        // $like->save();
    }
    public function storePost()
    {
        
    }
}
