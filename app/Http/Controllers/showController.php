<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class showController extends Controller
{
  
    public function shop(){

        $produits= \App\Product::all();

        return view('products.boutique',compact('produits'));

     }  
      /**
     * show the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Request $request,$id ){
       
    //  $product= \App\Product::find($id);
      $product= \App\Product::where('id',$id)->firstOrFail();
      $stock= $product->stock === 0 ? 'indisponible':'disponible';

      return view('products.produit',[
        'product'=>$product,
        'stock'=>$stock]);

   }     
 
}

