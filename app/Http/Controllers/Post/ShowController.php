<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class ShowController extends BaseController
{

    public function __invoke(Post $post)
    {
        $posts = Post::all();
        return view('post.show', compact('post'));
    }
   
}
