@extends("layouts.layout")
@section("Product_index")
<div class="container">
<div class="row">
<div class="col">

<table class="table table-bodered">
<br>
<div><h1>{{__('Liste des produits')}}</h1></div>
<br>
<tr class=" bg-success">
           <th>id</th>          <th>Nom Produit</th>  <th>Prix Produit</th>    <th>Quantite</th> <th>Images</th><th>description</th> <th><a href="Product/create "> <button class="btn btn-success">Ajouter</button></a></th>      <th>Action</th>
       </tr>
       
       @foreach($products as $product)  
<tr>
       
            <td>{{$product->id ?? ''}}</td>
            <td>{{$product->name ?? ''}}</td>
            <td>{{$product->price ?? ''}} </td>
            <td>{{$product->quantity ?? ''}} </td>
            
            <td><img src="{{$product->product_image ? asset($product->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" width="50"></td>
            <td>{{$product->description ?? ''}}</td>
            <td>
            <a href="Product/create "> <button class="btn btn-success">  Ajouter </button></a>
            </td>
       <td>
        <a href="{{route('update_produit',['id'=>$product->id])}}"><button class="btn btn-warning"> Modifier </button></a>
       <br>
           <form action="Product/{{$product->id}}" method="post">
               @csrf
               @method('delete')
             <td>  <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
             </td>
              
           </form>
</tr>

       @endforeach

</table>
        </div>
        </div>

 @endsection  

