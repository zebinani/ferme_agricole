 @extends("layouts.layout")
 @section("Product_create")
 <div class="container">
 <br>
 <div class="row">
 <div class="col-8">
 <div><h1>{{__('Enregistrement d\'un Produit')}}</h1></div>
 <br>

 <form action="{{route('Product.store')}}" method="post" enctype="multipart/form-data">
 
               @csrf
               <div>
                   <input type="text" name="name" class="form-control"required placeholder="le nom du produit">
               </div>
               <br>
               <div>
                   <input type="number" min="0" name="price" class="form-control"required placeholder="Le prix du produit">
               </div>
               <br>
               <div>
                   <input type="number" min="0" name="quantity" class="form-control"required placeholder="Le quantite du produit">
               </div>
                <br>            
                <div><input type="file" name="product_image" class="form-control"></div>
                <br>
  
               <div>
                   <button type="submit" class="btn btn-primary">Enregistrer</button>
               </div>
               <br><br>
    </form>
    </div>
    </div>
    </div>
@endsection           
           
  
