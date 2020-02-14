<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class showController extends Controller
{
    //
    public function show(){
        $produits= \App\Product::all();

        return view('products.boutique',compact('produits'));
    }
    
}

