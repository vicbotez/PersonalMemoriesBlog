<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Admin\Media\BaseController;

class CreateController extends BaseController
{

  public function __invoke(){
    return view('admin.media.create');
  }


}
