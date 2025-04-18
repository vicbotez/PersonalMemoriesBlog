<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use Illuminate\Http\Request;

use App\Models\Post;

class DeleteController extends BaseController
{

  public function __invoke(Post $post){

    $post->delete();

    return redirect()->route('admin.post.index')->with('success', 'Post Deleted.');

  }


}
