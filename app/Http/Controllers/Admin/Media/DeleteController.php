<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Admin\Media\BaseController;
use App\Models\Media;

class DeleteController extends BaseController
{

  public function __invoke(Media $media){
    $media->delete();
    return redirect()->route('admin.media.index')->with('success', 'Media File Deletged.');
  }


}
