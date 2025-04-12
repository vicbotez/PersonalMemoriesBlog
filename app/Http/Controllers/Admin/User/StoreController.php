<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;

use App\Models\User;

class StoreController extends Controller
{

  public function __invoke(StoreRequest $request){

    $data = $request->validated();
    $data['password'] = Hash::make($data['password']);
    User::firstOrCreate(['email' => $data['email']],$data);

    return redirect()->route('admin.user.index')->with('success', 'New User Added.');
  }


}
