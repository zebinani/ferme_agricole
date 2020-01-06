@extends("layouts.layout")
@section("Product_index")
<div class="container">
<div class="row">
<div class="col">
  
<table class="table table-bodered">
       <tr>
           <th>#</th>          <th>Nom Produit</th>  <th>Prix Produit</th>    <th>Quantite</th>        <th>Action</th>
       </tr>
       
       @foreach($products as $product)
       
       
   <tr>
       <th>#</th>
            <td>{{$product->name ?? ''}}</td>
            <td>{{$product->price ?? ''}} </td>
            <td>{{$product->quantity ?? ''}} </td>

            <td>
            <a href="Product/create "> <button class="btn btn-success">  Ajouter </button></a>
            </td>
       <td>
<a href="{{route('update_produit',['id'=>$product->id])}}"><button class="btn btn-warning"> Modifier </button></a>
       </td>
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

