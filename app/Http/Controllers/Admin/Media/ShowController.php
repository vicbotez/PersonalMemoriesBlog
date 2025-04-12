<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Admin\Media\BaseController;
use App\Models\Media; 

class ShowController extends BaseController
{

  public function __invoke(Media $media){
    $media = Media::find($media->id);
    return view('admin.media.show', compact('media'));
  }

}
