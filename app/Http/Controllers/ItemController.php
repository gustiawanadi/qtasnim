<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.items.index',[
            'items' => Item::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        //validate form
        $request->validate([
            'nama_barang'     => 'required|min:2',
            'jenis_barang'     => 'required',
            'stok'   => 'required'
        ]);

        //create Item
        Item::create($request->all());

        //redirect to index
        return redirect()->route('items.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('dashboard.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
         //validate form
        $request->validate([
            'nama_barang'     => 'required|min:2',
            'jenis_barang'     => 'required',
            'stok'   => 'required'
        ]);

        //update Item
        $item->update([
            'nama_barang'=> $request->nama_barang,
            'jenis_barang'=> $request->jenis_barang,
            'stok'   => $request->stok
        ]);

        //redirect to index
        return redirect()->route('items.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
         //delete post
         $item->delete();

         //redirect to index
         return redirect()->route('items.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
