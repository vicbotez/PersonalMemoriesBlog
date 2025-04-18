<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{

  public function __invoke(UpdateRequest $request, Tag $tag){
    $data = $request->validated();
    $tag->update($data);
    return redirect()->route('admin.tag.index')->with('success', 'Tag Updated.');
  }


}
