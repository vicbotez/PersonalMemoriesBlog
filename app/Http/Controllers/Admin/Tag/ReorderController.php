<?php

namespace App\Http\Controllers\Admin\Tag;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class ReorderController extends Controller
{

  public function __invoke(Request $request){

    $order = $request->input('order');

    foreach ($order as $index => $id) {
      Tag::where('id', $id)->update(['order' => $index]);
    }

  }


}
