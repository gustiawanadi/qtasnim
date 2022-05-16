<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.transactions.index',[
            'transactions' => Transaction::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionRequest $request)
    {
        //validate form
        $request->validate([
            'nama_barang'     => 'required|min:2',
            'stok'     => 'required',
            'jumlah_terjual'     => 'required',
            'tgl_transaksi'     => 'required',
            'jenis_barang'     => 'required'
        ]);

        //create Transaction
        Transaction::create($request->all());

        //redirect to index
        return redirect()->route('transactions.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('dashboard.transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //validate form
       $request->validate([
        'nama_barang'     => 'required|min:2',
        'stok'     => 'required',
        'jumlah_terjual'     => 'required',
        'tgl_transaksi'     => 'required',
        'jenis_barang'     => 'required'
       ]);

       //update transaction
       $transaction->update([
           'nama_barang'=> $request->nama_barang,
           'stok'   => $request->stok,
           'jumlah_terjual'     => $request->jumlah_terjual,
           'tgl_transaksi'     => $request->tgl_transaksi,
           'jenis_barang'=> $request->jenis_barang
       ]);

       //redirect to index
       return redirect()->route('transactions.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //delete transaction
        $transaction->delete();

        //redirect to index
        return redirect()->route('transactions.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
