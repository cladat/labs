<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
        $user=$this->route('user');
        return [
            'email' => 'required|email|unique:users,email,'.$user->id.'id',
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
