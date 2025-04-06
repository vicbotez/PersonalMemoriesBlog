<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{

  public function __invoke(\App\Models\Tag $tag){
    return view('admin.tag.edit', compact('tag'));
  }


}
