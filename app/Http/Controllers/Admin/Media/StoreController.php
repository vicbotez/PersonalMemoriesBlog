<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Admin\Media\BaseController;
use App\Http\Requests\Admin\Media\StoreRequest;

class StoreController extends BaseController
{

  public function __invoke(StoreRequest $request){

    $file = $request->file('document');
    $alt = $request->input('alt') ?? '';

    $this->service->store($file,$alt);

    return redirect()->route('admin.media.index')->with('success', 'New Media File Added.');
  }


}
