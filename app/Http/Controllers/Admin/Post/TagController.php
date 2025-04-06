<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Post\BaseController;

use App\Models\Post;

class TagController extends BaseController
{

  public function __invoke($tag){

    $posts = Post::whereHas('tags', function ($query) use (& $tag) {
        $query->where('title', $tag);
    })->orderBy('created_at','DESC')->get();

    return view('admin.post.tag', compact('posts'));
  }

}
