<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepelangganRequest extends FormRequest
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
            'kode_pelanggan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ];
    }

    public function massages()
    {
        return [
            'kode_pelanggan.required' => 'Kode Barang belum diisi!',
            'nama.required' => 'nama belum diisi!',
            'alamat.required' => 'alamat belum diisi!',
            'no_telp.required' => 'no telp diisi!',
            'email.required' => 'email belum diisi!',
        ];
    }
}

