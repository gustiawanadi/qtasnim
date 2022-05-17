<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    public function index()
    {
        return view('index', [
            'items' => Item::all(),
            'categories' => Category::all(),
            'transactions' => Transaction::latest()->get()
        ]);
    }
}
