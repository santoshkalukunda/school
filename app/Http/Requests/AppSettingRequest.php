<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppSettingRequest extends FormRequest
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
            'site_name' => 'required',
            'tagline' => 'nullable',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'maps' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'twitter' => 'nullable',
            'tiktok' => 'nullable',
            'youtube' => 'nullable',
            'logo' => 'nullable',
            'fevicon' => 'nullable',
            'openingTime' => 'nullable',
            'top_color' => 'nullable',
            'top_bar' => 'nullable',


        ];
    }
}
