<?php
 
namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use Illuminate\Http\Request;

use App\Models\Tag;

class CreateController extends BaseController
{

  public function __invoke(){
    $tags = Tag::all();
    return view('admin.post.create', compact('tags') );
  }


}
