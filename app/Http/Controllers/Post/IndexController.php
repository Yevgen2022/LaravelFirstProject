<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class IndexController extends BaseController
{

    public function __invoke()
    {
        //$posts = Post::all();
        $posts = Post::paginate(10);
      //  dd($posts);
        return view('post.index', compact('posts'));
    }

}
