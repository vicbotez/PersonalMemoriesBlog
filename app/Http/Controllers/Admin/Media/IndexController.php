<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Admin\Media\BaseController;
use App\Models\Media; 

class IndexController extends BaseController
{

  public function __invoke(){
    $media = Media::all();
    return view('admin.media.index', compact('media'));
  }

}
