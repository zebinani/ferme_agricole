
@extends("layout")

@section("Product_edit")


<form action="{{route('products.edit',['id'=>$produit->id])}}
" method="post">
   @csrf
   @method('patch')
   <div>
   <input type="text" name="name" class="form-control" placeholder="le nom du produit" value="{{$produit->name ?? ''}}">
   </div>

   <div>
   <input type="text" name="price" class="form-control" placeholder="Le prix du produit" value="{{$produit->price ?? ''}}"> </div>
   <input type="text" name="quantity" class="form-control" placeholder="quantite du produit"
   value="{{$produit->quantity ?? ''}}"> </div>

    <div> <button class="btn btn-primary">Enregistrer</button> </div>

</form>

@endsection