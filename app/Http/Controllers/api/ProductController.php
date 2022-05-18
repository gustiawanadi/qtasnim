<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ItemController;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Resources\ProductResource;
use App\Models\Item;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Item::all();
        $result = ProductResource::collection($products);
        // return response([
        //     'success' => true,
        //     'message' => 'Menampilkan Semua Daftar Barang',
        //     'data' => $products
        // ], 200);
        return $this->sendResponse($result, 'Sukses menampilkan daftar barang');
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Http\Requests\StoreItemRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    // * @param  \Illuminate\Http\Request  $request
    {
        $result = new ProductResource(Item::create($request->validated()));
        // return response([
        //     'success' => true,
        //     'message' => 'Barang berhasil disimpan!',
        // ], 200);
        return $this->sendResponse($result, 'Sukses menambah daftar barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::whereId($id)->first();
        $product = new ProductResource($item);
        if ($product) {
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Detail barang!',
            //     'data'    => $product
            // ], 200);
            return $this->sendResponse($product, 'Sukses melihat daftar barang');
        } else {
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Nama Barang Tidak Ditemukan!',
            //     'data'    => ''
            // ], 401);
            return $this->sendError($product, 'Gagal melihat daftar barang');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(StoreItemRequest $request, Item $item)
    {
        // * @param  \App\Http\Requests\UpdateItemRequest   $request
        //update Item
        $item->update($request->validated());
        $result = new ProductResource($item);

        if ($result) {
            return $this->sendResponse($result, 'Sukses memperbarui daftar barang');
        } else {
            return $this->sendError($result, 'Gagal memperbarui daftar barang');
        }
        // return $this->sendResponse($product, 'Sukses memperbarui  daftar barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        // $item = Item::findOrFail($id);
        $item->delete();

        // return response()->noContent();

        //return response
        // $result = new ProductResource($item);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Dihapus!',
        ], 200);

        // if ($result) {
        //     // return response()->json([
        //     //     'success' => true,
        //     //     'message' => 'Berhasil Dihapus!',
        //     // ], 200);
        //     return $this->sendResponse($result, 'Sukses Menghapus  daftar barang');
        // } else {
        //     // return response()->json([
        //     //     'success' => false,
        //     //     'message' => 'Gagal Dihapus!',
        //     // ], 400);
        //     return $this->sendError($result, 'Gagal menghapus  daftar barang');
        // }
    }
}
