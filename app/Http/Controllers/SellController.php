<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell;

class SellController extends Controller
{
    public function index()
    {
        $sells = Sell::all();
        return view('sells.index', compact('sells'));
    }

    public function show($id)
    {
        $sell = Sell::findOrFail($id);
        return view('sells.show', compact('sell'));
    }
}
