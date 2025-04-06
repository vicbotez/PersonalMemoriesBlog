<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Requests\Admin\Post\StoreRequest;

use App\Models\Post;


class StoreController extends BaseController
{

  public function __invoke(StoreRequest $request){

    $data = $request->validated();
    $data['user_id'] = Auth()->user()->id;
    $this->service->store($data);

    return redirect()->route('admin.post.index');
  }


}
