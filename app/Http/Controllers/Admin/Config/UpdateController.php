<?php

namespace App\Http\Controllers\Admin\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\Admin\Config\UpdateRequest;
use App\Http\Controllers\Admin\Config\BaseController;
use App\Services\ConfigService;
use App\Models\Config;

class UpdateController extends BaseController
{

  public function __invoke(UpdateRequest $request){

    $data = $request->validated();
    if( isset($data['blog_favicon']) && is_object($data['blog_favicon']) ){
      $data['blog_favicon'] = Storage::disk('public')->put('/images' , $data['blog_favicon']);
    }
    foreach($data AS $key => $val){
      $post = $this->service->set($key, $val);
    }

    return redirect()->route('admin.config.index');
  }


}
