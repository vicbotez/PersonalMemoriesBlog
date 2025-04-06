<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tag;

class IndexController extends Controller
{

  public function __invoke(){
    //$tags = Tag::all();
    $tags = Tag::withCount('posts')->get(); // Adds posts_count attribute
    return view('admin.tag.index', compact('tags'));
  }

}
