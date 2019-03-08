<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContent extends FormRequest
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

            'carousel_text'  =>  'required|max:60|min:3',
            'carousel_logo' => 'image',
            'projects_title' => 'required|max:100|min:5',
            'projects_text1'  =>  'required|max:500|min:60',
            'projects_text2'  =>  'required|max:500|min:60',
            'video' => 'required|url',
            'clients_title' => 'required|max:100|min:5',
            'team_title' => 'required|max:100|min:5',
            'services_title' => 'required|max:100|min:5',
            'page_services_title1' => 'required|max:50|min:3',
            'page_services_title2' => 'required|max:50|min:3',
            'contact_title' => 'required|max:100|min:5',
            'contact_description' => 'required|max:200|min:5',
            'contact_company' => 'required|max:60|min:3',
            'contact_address' => 'required|max:200|min:10',
            'contact_phone' => 'required|digits_between:9,20',
            'contact_email' => 'required|email',

        ];
    }
    public  function  messages(){
        return[
            'carousel_text.required' => 'enter text',
            'carousel_text.max' => 'max 60 char. pliz',
            'carousel_text.min' => 'min 3 char. pliz',
            'carousel_logo.image' => 'only jpeg, png, bmp, gif, or svg file',
            'projects_title.required' => 'enter text',
            'projects_title.max' => 'max 100',
            'projects_title.min' => 'min 5',
            'projects_text1.required'  =>  'enter text',
            'projects_text1.max'  =>  'max 500 char.',
            'projects_text1.min'  =>  'min 60 char.',
            'projects_text2.required'  =>  'enter text',
            'projects_text2.max'  =>  'max 500 char.',
            'projects_text2.min'  =>  'min 60 char.',
            'video.required' => 'enter url',
            'video.url' => 'url only',
            'clients_title.required' => 'enter text',
            'clients_title.max' => 'max 100',
            'clients_title.min' => 'min 5',
            'team_title.required' => 'enter text',
            'team_title.max' => 'max 100',
            'team_title.min' => 'min 5',
            'services_title.required' => 'enter text',
            'services_title.max' => 'max 100',
            'services_title.min' => 'min 5',
            'page_services_title1.required' => 'enter text',
            'page_services_title1.max' => 'max 50',
            'page_services_title1.min' => 'min 3',
            'page_services_title2.required' => 'enter text',
            'page_services_title2.max' => 'max 50',
            'page_services_title2.min' => 'min 3',


        ];
    }
}
