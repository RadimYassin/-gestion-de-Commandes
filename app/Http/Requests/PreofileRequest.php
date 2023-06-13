<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreofileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name"=>"required|max:20|min:8",
            "email"=>"required",
            "password"=>"required|max:15|min:8|confirmed",
            "bio"=>"required",
            "image"=>"image|mimes:png,jpg"
        ];
    }
}
