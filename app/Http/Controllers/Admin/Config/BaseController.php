<?php
 
namespace App\Http\Controllers\Admin\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\ConfigService;


class BaseController extends Controller
{

  public $service;

  public function __construct(ConfigService $service)
  {
    $this->service = $service;
  }
 
}
