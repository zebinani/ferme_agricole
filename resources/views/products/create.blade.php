 @extends("layouts.layout")
 @section("Product_create")
 
 <form action="{{route('Product.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="name" class="form-control" placeholder="le nom du produit">
               </div>
               <div>
                   <input type="text" name="price" class="form-control" placeholder="Le prix du produit">
               </div>

               <div>
                   <input type="text" name="quantity" class="form-control" placeholder="Le quantite du produit">
               </div>
               
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
    </form>

@endsection           
           
  
