<?php
 
namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\MediaService;

use App\Models\Media; 

class BaseController extends Controller
{

  public $service;

  public function __construct(MediaService $service)
  {
    $this->service = $service;
  }
 
}
