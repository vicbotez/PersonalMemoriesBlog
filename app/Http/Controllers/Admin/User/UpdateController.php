<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{

  public function __invoke(UpdateRequest $request, User $user){
    $data = $request->validated();
    if ( isset($data['password']) ){
      $data['password'] = Hash::make($data['password']);
    }else{
      unset($data['password']);
    }
    
    $user->update($data);
    return redirect()->route('admin.user.index');
  }


}
