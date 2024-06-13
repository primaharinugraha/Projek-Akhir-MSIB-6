<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required'],
            'name' => ['required'],
            'phone_number' => [],
            'gender' => ['in:Laki-laki,Perempuan'],
            'job' => [],
            'source_income' => [],
            'country' => [],
            'last_education' => [],
            'postal_code' => [],
            'address' => [],
            'photo' => ['mimes:jpg,bmp,png', 'max:5048'],
            'age' => [''],
            'married_status' => ['in:Lajang,Menikah'],
            'premium' => ['boolean'],
        ];
    }
}
