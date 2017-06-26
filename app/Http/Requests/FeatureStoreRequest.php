<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureStoreRequest extends FormRequest
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
            'name' => 'required|max:20',
            'description' => 'required|max:50',
            'latitude' => 'required|regex:/^[1-9][0-9]\.[0-9]*$/',
            'longitude' => 'required|regex:/^[1-9]\.[0-9]*$/'
        ];
    }
    
    public function messages()
    {
        return [
            'latitude.regex' => 'The latitude format is invalid (format: xx.xxxxx where x is a number).',
            'longitude.regex' => 'The longitude format is invalid (format: x.xxxxx where x is a number).'
        ];
    }
}