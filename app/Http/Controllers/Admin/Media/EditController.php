<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Admin\Media\BaseController;
use App\Models\Media;


class EditController extends BaseController
{

  public function __invoke(Media $media){
    return view('admin.media.edit', compact('media'));
  }


}
