<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       // dd(cart::content());
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

        cart::add($product->id,$product->name,1,$product->price,['image'=> $product->product_image ]) 
        ->associate(' App\Product');
        return redirect('/shop')->with(['success'=>'le produit est bien ajouter au panier']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rowId)
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
    public function update(Request $request, $rowId)
    {
        //

         $data = $request->json()->all();



        Cart::update($rowId, $data['qty']);

        Session::flash('success', 'La quantité du produit est passée à ' . $data['qty'] . '.');
        
        return response()->json(['success' => 'Cart Quantity Has Been Updated']);

/*
        $data = $request->json()->all();
    

        $validates = Validator::make($request->all(), [
            'qty' => 'numeric|required|between:1,100',
        ]);

        if ($validates->fails()) {
            Session::flash('error', 'La quantité doit est comprise entre 1 et 100.');
            return response()->json(['error' => 'Cart Quantity Has Not Been Updated']);
        }
        
        

        Cart::update($rowId, $data['qty']);

        Session::flash('success', 'La quantité du produit est passée à ' . $data['qty'] . '.');

        return response()->json(['success' => 'Cart Quantity Has Been Updated']);
       */
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

        return  back()->with(['success'=>'le produit a ete bien supprime']);
    }
}
