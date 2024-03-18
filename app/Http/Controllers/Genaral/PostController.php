<?php

namespace App\Http\Controllers\Genaral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.posts.index', [
            'pageTitle' => 'Galeri'
        ]);
    }
}
