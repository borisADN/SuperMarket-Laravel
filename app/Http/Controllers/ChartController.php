<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{

    public function chart1()
    {
        return view('charts.chart1.index');
    }

    public function chart2()
    {
        return view('charts.chart2.index');
    }
    
}
