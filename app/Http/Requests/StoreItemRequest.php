<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'nama_barang'     => 'required|unique:items',
            'category_id'     => 'required|integer',
            'stok'   => 'required|integer'
        ];
    }
    
    public function messages()
    {
        return [
            'nama_barang.required' => 'Nama barang wajib di isi!',
            'nama_barang.unique' => 'Barang sudah ada!',
            'category_id.required' => 'Kategori wajib di isi!',
            'category_id.integer' => 'Jenis barang wajib di isi!',
            'stok.required' => 'Stok wajib di isi!',
            'stok.integer' => 'Stok berupa angka',
        ];
    }
    public function attributes()
    {
        return [
            'category_id' => 'jenis barang',
        ];
    }
}
