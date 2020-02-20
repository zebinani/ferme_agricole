<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $product=Product::find($request->product_id);

         $duplicata = Cart::search (function ($cartItem, $rowId) use($request) {
          //  dd( (int) $request->product_id);
          return $cartItem->id=== (int)$request->product_id;
        });

        if($duplicata->isNotEmpty()){
            return redirect('/shop')->with(['success'=>'le produit a deja ete ajoute']);        }

        cart::add($product->id,$product->name,1,$product->price) 
        ->associate(' App\Product');
        return redirect('/shop')->with(['success'=>'le produit est bien ajouter au panier']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart :: remove ($rowId );

        return  back()->with(['success'=>'le produit a ete supprime']);
    }
}
