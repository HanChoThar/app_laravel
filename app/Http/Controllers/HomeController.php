<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $posts = Post::all();
        return view('home', [
            'posts' => $posts
        ]);
    }

    
}
