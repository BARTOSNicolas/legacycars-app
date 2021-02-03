<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BackOfficeController extends Controller
{
    public function show(){
        $products = Product::all();
        return view('backoffice', ['products' => $products]);
    }
    public function create(){
        return view('back-formulaire');
    }
    public function addProduct(Request $request){

        $product = new Product;

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->quantity = $request->input('quantity');
        $product->available = $request->input('available');
        $product->picture = $request->input('picture');
        $product->categorie_id = $request->input('categorie_id');

        $product->save();

        return "Youpi c'est la fete";

    }
    public function update($id){
        $products = Product::find($id);
        return view('backoffice', ['products' => $products]);
    }
    public function delete($id){
        $products = Product::find($id);
        return view('backoffice', ['products' => $products]);
    }

}
