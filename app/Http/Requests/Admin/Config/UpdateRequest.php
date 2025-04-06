<?php

namespace App\Http\Requests\Admin\Config;

use Illuminate\Foundation\Http\FormRequest;

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
            'blog_name' => 'string|nullable',
            'blog_title' => 'string|nullable',
            'blog_favicon' => 'file|nullable',
            'blog_meta_title' => 'string|nullable',
            'blog_meta_description' => 'string|nullable'
        ];
    }
}
