<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePemasokRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'email_verified_at' => 'required',
            'password' => 'required',
            'remember_token' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ];
    }

    public function massages()
    {
        return [
            'name.required' => 'Data nama pemasok belum diisi!',
            'email.required' => 'Data nama pemasok belum diisi!',
            'email_verified_at.required' => 'Data nama pemasok belum diisi!',
            'password.required' => 'Data nama pemasok belum diisi!',
            'remember_token.required' => 'Data nama pemasok belum diisi!',
            'created_at' => 'Data nama pemasok belum diisi!',
            'updated_at' => 'Data nama pemasok belum diisi!',
        ];
    }
}
