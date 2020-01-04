
@extends("layouts.layout")

@section("Product_edit")


<form action="{{route('products.edit',['id'=>$product->id])}}
" method="post">
   @csrf
   @method('patch')
   <div>
   <input type="text" name="name" class="form-control" placeholder="le nom du produit" value="{{$product->name ?? ''}}">
   </div>

   <div>
   <input type="text" name="price" class="form-control" placeholder="Le prix du produit" value="{{$product->price ?? ''}}"> </div>
   <input type="text" name="quantity" class="form-control" placeholder="quantite du produit"
   value="{{$product->quantity ?? ''}}"> </div>

    <div> <button class="btn btn-primary">Enregistrer</button> </div>

</form>

@endsection