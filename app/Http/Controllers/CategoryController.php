<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view ('dashboard.categories.index',[
            'categories' => Category::latest()->get()
            // 'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //validate form
        $request->validate([
            'jenis_barang' => 'required'
        ]);

        //create Category
        Category::create($request->all());

        //redirect to index
        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //validate form
       $request->validate([
           'jenis_barang'     => 'required'
       ]);

       //update category
    //    $category->update([
    //        'jenis_barang'=> $request->jenis_barang
    //    ]);
       $category->update($request->all());

       //redirect to index
       return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Diubah!']);
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //delete post
        $category->delete();

        //redirect to index
        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Dihapus!']);
   }
}
