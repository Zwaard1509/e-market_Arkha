<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorebarangRequest extends FormRequest
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
            'kode_barang' => 'required',
            'produk_id'   => 'required',
            'nama_barang' => 'required',
            'satuan'      => 'required',
            'harga_jual'  => 'required',
            'stock'       => 'required',
            'ditarik'     => 'required',
            'user_id'     => 'required'
        ];
    }

    public function massages()
    {
        return [
            'kode_barang.required' => 'Kode Barang belum diisi!',
            'produk_id.required' => 'ID Produk belum diisi!',
            'nama_barang.required' => 'Nama Barang belum diisi!',
            'satuan.required' => 'Satuan belum diisi!',
            'harga_jual.required' => 'Harga Jual belum diisi!',
            'stock.required' => 'Stock belum diisi!',
            'ditarik.required' => 'Ditarik belum diisi!',
            'user_id.required' => 'User ID belum diisi!',
        ];
    }
}
