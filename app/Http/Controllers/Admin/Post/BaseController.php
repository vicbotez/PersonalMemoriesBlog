<?php
 
namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\PostService;

use App\Models\Tag; 

class BaseController extends Controller
{

  public $service;

  public function __construct(PostService $service)
  {
    $this->service = $service;
  }
 
}
