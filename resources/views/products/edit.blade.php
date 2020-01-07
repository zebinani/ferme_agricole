
@extends("layouts.layout")

@section("Product_edit")
<div class="container">
<br>
<div class="row">
<div class="col-8">
<div><h1>{{__('Modification de Produit')}}</h1></div>
<br>

<form action="{{route('products.edit',['id'=>$product->id])}}
        " method="post">
        @csrf
        @method('patch')
        <div>
        <input type="text" name="name" class="form-control" placeholder="le nom du produit" value="{{$product->name ?? ''}}">
        </div>
        <br>
        <div>
        <input type="text" name="price" class="form-control" placeholder="Le prix du produit" value="{{$product->price ?? ''}}">
         </div>
        <br>
        <div>
        <input type="text" name="quantity" class="form-control" placeholder="quantite du produit"
        value="{{$product->quantity ?? ''}}">
            </div>
        <br>
            <div> <button class="btn btn-primary">Enregistrer</button> </div>

</form>
<br>
</div>
</div>
</div>
<br>
@endsection