<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComment extends FormRequest
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
            'name' => 'required|max:20|min:3',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required',
        ];
    }
    public  function  messages(){
        return[
            'name.required'  =>  'enter ur name pliz',
            'name.max'  =>  'max 20 char. pliz',
            'name.min'  =>  'min 3 char. pliz',            'email.required' => 'email pliz',
            'email.email' => 'email only pliz',
            'message.required' => 'write ur msg pliz',
            'subject.required' => 'pliz enter subject',
        ];
    }
}
