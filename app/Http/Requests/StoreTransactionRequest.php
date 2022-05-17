<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
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
            'item_id'     => 'required|integer',
            'jumlah_terjual'     => 'required|integer',
            'tgl_transaksi'     => 'required|date'
        ];
    }
    
    public function messages()
    {
        return [
            'item_id.required' => ':attribute wajib di isi!',
            'item_id.integer' => 'Barang berupa angka!',
            'jumlah_terjual.required' => ':attribute wajib di isi!',
            'jumlah_terjual.integer' => ':attribute berupa angka!',
            'tgl_transaksi.required' => ':attribute wajib di isi!',
            'tgl_transaksi.date' => 'Format :attribute ("yyyy-mm-dd")!',
        ];
    }

    public function attributes()
    {
        return [
            'item_id' => 'Nama barang',
            'tgl_transaksi' => 'Tanggal Transaksi',
        ];
    }
}
