<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product_list(){
        $products = DB::select('SELECT * FROM products');
        return view('product-list', ['products'=>$products]);
    }

    public function product_details($id){
        $product = DB::select('SELECT * FROM products WHERE id=?', [$id]);
        return view('product-details', ['id' => $id, 'product' => $product]);
    }
    public function create(){
        return view('product-sell');
    }
    public function store(Request $request){
        $data = [
            'form' => [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'mail' => $request->input('mail'),
                'phone' => $request->input('phone'),
                'marque' => $request->input('marque'),
                'model' => $request->input('model'),
                'annee' => $request->input('annee'),
                'kilometrage' => $request->input('kilometrage'),
                'prix' => $request->input('prix'),
            ]
        ];
        return view('product-sell', $data);
    }
}
