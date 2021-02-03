<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function product_list(){
        //$products = DB::select('SELECT * FROM products');
        $products = Product::all();
        return view('product-list', ['products'=>$products]);
    }
    public function product_list_sortByName(){
        //$products = DB::select('SELECT * FROM products');
        $products = Product::all()->sortBy('name');
        return view('product-list', ['products'=>$products]);
    }
    public function product_list_sortByPrice(){
        //$products = DB::select('SELECT * FROM products');
        $products = Product::all()->sortBy('price');
        return view('product-list', ['products'=>$products]);
    }

    public function product_details($id){
       //$product = DB::select('SELECT * FROM products WHERE id=?', [$id]);
        $product = Product::all()->where('id', $id);
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
