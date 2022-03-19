<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() === 'PUT') {
            return [
                'name' => ['required', Rule::unique('categories')->ignoreModel($this->category)],
            ];
        }
        return [
            'name' => ['required', Rule::unique('categories')->whereNull('deleted_at')],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Category Name',
        ];
    }
}
