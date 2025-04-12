<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Admin\Media\BaseController;
use App\Http\Requests\Admin\Media\UpdateRequest;
use App\Models\Media; 

class UpdateController extends BaseController
{

  public function __invoke(UpdateRequest $request, Media $media){
    $data = $request->validated();
    $media->update($data);
    return redirect()->route('admin.media.index')->with('success', 'Media File Updated.');
  }


}
