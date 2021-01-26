<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productsController extends Controller
{
    //
    public function index()
    {
        $result = Product::all();

    	return view('adminPanel.products.index')
    		->with('prdlist', $result);
        
    }

    //
    
     public function create()
    {
        $result = Category::all();
        return view('adminPanel.products.create')
            ->with('catlist', $result);
        
    }

    //

    
    
}
