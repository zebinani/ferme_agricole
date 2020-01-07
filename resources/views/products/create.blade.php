 @extends("layouts.layout")
 @section("Product_create")
 <div class="container">
 <br>
 <div class="row">
 <div class="col-8">
 <div><h1>{{__('Enregistrement d\'un Produit')}}</h1></div>
 <br>
 
 <form action="{{route('Product.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="name" class="form-control" placeholder="le nom du produit">
               </div>
               <br>
               <div>
                   <input type="text" name="price" class="form-control" placeholder="Le prix du produit">
               </div>
               <br>
               <div>
                   <input type="text" name="quantity" class="form-control" placeholder="Le quantite du produit">
               </div>
  <br>
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
               <br><br>
    </form>
    </div>
    </div>
    </div>
@endsection           
           
  
