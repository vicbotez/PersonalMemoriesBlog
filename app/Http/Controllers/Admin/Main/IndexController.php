<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Tag;

class IndexController extends Controller
{

  public function __invoke(){
    $data['postCount'] = Post::all()->count();
    $data['tagCount'] = Tag::all()->count();
    return view('admin.main.main', compact('data'));
  }

}
