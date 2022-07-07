<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'name' => 'string|max:255',
            'email' => 'string|email|max:255',
            'password' => 'string|min:6|confirmed',
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'birthday' => 'date',
            'contact_number' => 'numeric',
            'avatar' => 'image',
            'gender' => [
                'required',
                Rule::in([
                    'male',
                    'female'
                ])
            ]
        ];
    }
}
