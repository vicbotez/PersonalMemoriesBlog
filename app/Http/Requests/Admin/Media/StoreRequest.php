<?php

namespace App\Http\Requests\Admin\Media;

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
      'document' => 'required|file|mimes:pdf,doc,docx,jpg,png,webp,ico,gif|max:4096',
      'alt' => 'nullable|string'
    ];
  }


  public function messages(){
    return [
      'document.required' => 'Media File is required.',
      'document.image' => 'File should be a image.',
      'document.max' => 'Max file size - 4MB.'
    ];
  }



}
