<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use App\Models\Tags;

class UpdateController extends BaseController
{

  public function __invoke(UpdateRequest $request, Post $post){

    $data = $request->validated();
    $data['user_id'] = Auth()->user()->id;
    $post = $this->service->update($data, $post);

    return redirect()->route('admin.post.index');

  }


}
