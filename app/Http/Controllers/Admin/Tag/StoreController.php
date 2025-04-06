<?php

namespace App\Http\Controllers\Admin\Tag;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;

use App\Models\Tag;

class StoreController extends Controller
{

  public function __invoke(StoreRequest $request){

    $data = $request->validated();
    $tag = Tag::withTrashed()->firstOrCreate($data);

    if ($tag->trashed()) {
      $tag->restore();
    }

    return redirect()->route('admin.tag.index');
  }


}
