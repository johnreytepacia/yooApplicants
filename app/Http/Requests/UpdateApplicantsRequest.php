<?php

namespace App\Http\Requests;

class UpdateApplicantsRequest extends Request
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
            'fullname'      =>  'required | max:255',
            'position'      =>  'required | max:255',
            'email'         =>  'required | max:255',
            'contact'       =>  'required | max:255',
            'location'      =>  'required',
            'skills'        =>  'required',
            'file'          =>  'required | mime:pdf'
        ];
    }
}
