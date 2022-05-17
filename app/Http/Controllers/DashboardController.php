<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        // return view ('dashboard.index');
        return view('dashboard.index',[
            'categories' => Category::all(),
            'items' => Item::all(),
            'transactions' => Transaction::all()
        ]);

    }
}
