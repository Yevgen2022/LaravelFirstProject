<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MyPracticeController extends Controller
{
    public function index(){
        //return 'Hurra practice';
        $post = Post::find(1);
        $str = 'string';
        dd($post->likes);
    }
}
