<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class TagController extends Controller
{

  public function __invoke($tag){

    $posts = Post::whereHas('tags', function ($query) use (& $tag) {
      if( isset($tag) ){
        $query->where('title', $tag);
      }
    })->orderBy('created_at','DESC')->paginate(10);

    return view('main.post.tag', compact('posts','tag'));
  }

}
