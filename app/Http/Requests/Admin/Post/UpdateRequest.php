<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest 
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
        'title' => 'required|string|'.
        Rule::unique('posts', 'title')->ignore($this->post),
        'content' => 'required',
        'tag_ids' => 'nullable|array',
        'tag_ids.*' => 'nullable|integer|exists:tags,id'
      ];
    }

  public function messages(){
    return [
      'title.required' => 'Title field cannot be empty.',
      'title.string' => 'Title field should be string type.',
      'content.required' => 'Content field cannot be empty.',
      'content.string' => 'Content field should be string type.',
      'tag_ids' => 'Tag ids is not an array'

    ];
  }


}
