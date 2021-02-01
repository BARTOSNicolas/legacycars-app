<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_list(){
        return view('product-list');
    }

    public function product_details(){
        $id = request('id');
        return view('product-details');
    }
    public function product_sell(){
        return view('product-sell');
    }
}
