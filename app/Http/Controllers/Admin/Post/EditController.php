<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class EditController extends BaseController
{

  public function __invoke(Post $post){

    $tags = Tag::all();
// dd($post->tags->pluck('id')->toArray());
    return view('admin.post.edit', compact('post','tags'));
  }

}
