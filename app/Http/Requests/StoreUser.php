<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => 'required|max:30|min:6',
            'name' => 'required|min:3',
            'job' => 'required|min:3|max:40',
            'image' => 'required|image'
        ];
    }
    public function messages(){
        return[
            'email.required' => 'enter ur email bitch',
            'email.email' => 'it has to be an email dummy',
            'email.unique' => 'this email already exists u copycat'
        ];
    }
}
