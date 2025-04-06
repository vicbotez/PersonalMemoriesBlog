<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class ShowController extends Controller
{

  public function __invoke($slug){
    $post = Post::where('slug', $slug)->firstOrFail();
    return view('main.post.show', compact('post'));
  }

}
