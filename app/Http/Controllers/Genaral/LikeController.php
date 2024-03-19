<?php

namespace App\Http\Controllers\Genaral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        return view('pages.likes.index', [
            'pageTitle' => 'Suka'
        ]);
    }
}
