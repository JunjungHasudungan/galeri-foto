<?php

namespace App\Http\Controllers\Genaral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return view('pages.comments.index', [
            'pageTitle' => 'Komentar'
        ]);
    }
}
