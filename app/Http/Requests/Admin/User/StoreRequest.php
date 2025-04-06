<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

  /**
   * Determine if the user is authorized to make this request.
  */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
  */
  public function rules(): array
  {
    return [
      'name' => 'required|string|max:128',
      'role' => 'required|integer',
      'email' => 'required|string|email|unique:users|max:128',
      'password' => 'required|string|max:64'
    ];
  }

  public function messages(){
    return [
      'name.required' => 'Name field cannot be empty.',
      'name.string' => 'Name field should be string type.',
      'email.required' => 'Email field cannot be empty.',
      'email.email' => 'Email field should be a valid email address.',
      'password.required' => 'Password field cannot be empty.'

    ];
  }

}
