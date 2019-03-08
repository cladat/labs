<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonial extends FormRequest
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
        return [
            'text' => 'min:20|max:300'
        ];
    }
    public function messages()
    {
        return [
            'text.min' => 'minimum 20 pliizzzzz',
            'text.max' => 'MAX 300 MOTHERFUCKA',
        ];
    }
}
