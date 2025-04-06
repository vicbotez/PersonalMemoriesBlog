<?php

namespace App\Http\Controllers\Admin\Config;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Config\BaseController;
use App\Models\Config;
use Illuminate\Support\Facades\Storage;

class IndexController extends BaseController
{

  public function __invoke(){
    $config = (Object) Config::all()->pluck('value', 'key')->toArray();
    return view('admin.config.index',compact('config'));
  }

}
