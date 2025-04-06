<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class IndexController extends Controller
{

  public function __invoke(){
    $posts = Post::orderBy('created_at','DESC')->paginate(10);
    return view('main.post.index', compact('posts'));
  }

}
