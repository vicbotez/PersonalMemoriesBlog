<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Post\BaseController;

use App\Models\Post;

class IndexController extends BaseController
{

  public function __invoke(){
    $posts = Post::all();
    return view('admin.post.index', compact('posts'));
  }

}
