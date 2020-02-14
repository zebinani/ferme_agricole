<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $this->authorize('Admin');
        //
    $products = \App\Product::orderBy('created_at', 'DESC')->get();
        
        return view('products.index', compact('products'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('Admin');
        return view('products.create');
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $data =$request->validate([
            "name"=>"required|max:300|min:5",
            "price"=>"required|numeric",
            "product_image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);

        $produit = new Product();
        //On verfie si une image est envoyée
        if($request->has('product_image')){
            //On enregistre l'image dans un dossier
            $image = $request->file('product_image');
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/images/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $produit->product_image= $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
       $produit->name = $request->input('name');
       $produit->price = $request->input('price');
       $produit->quantity = $request->input('quantity');
       $produit->save();
 
        return redirect('/');
    }
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
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
        $product = \App\Product::find($id);//on recupere le produit
        
        return view('products.edit', compact('product'));
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
        $product = \App\Product::find($id);
        if($product){
         $product->update([
           'name' => $request->input('name'),
           'price' => $request->input('price'),
           'quantity'=> $request->input('quantity')
           
       ]);
   }
   return redirect('/Product');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Products = Product::find($id);
        if($Products)
        $Products->delete();
    return redirect()->route('Product.index');
}

 
}

