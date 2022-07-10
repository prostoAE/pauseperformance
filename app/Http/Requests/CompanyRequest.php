<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest {
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
            'name' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|numeric',
            'address' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'website_url' => 'nullable|url|max:255',
            'country' => 'nullable|string|max:25',
            'state' => 'nullable|string|max:25',
            'city' => 'nullable|string|max:25',
            'postal_code' => 'nullable|numeric|min:10',
            'phone_number' => 'nullable|numeric',
        ];
    }
}
