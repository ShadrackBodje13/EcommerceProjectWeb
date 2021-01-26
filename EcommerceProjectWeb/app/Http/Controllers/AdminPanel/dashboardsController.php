<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\Sales;

class dashboardsController extends Controller
{
    //
    public function index(){
        $sales =  sale::all();
        return view('adminPanel.dashboard.index')
        ->with('Sales',$sales);
    }
}
