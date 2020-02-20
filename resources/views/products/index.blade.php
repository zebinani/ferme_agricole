@extends("layouts.layout")
@section("Product_index")
<div class="container">
<div class="row">
<div class="col">

<table class="table table-bodered">
<br>
<div><h1>{{__('Liste des produits')}}</h1></div>
<br>
<tr> 
<a href="Product/create "> <button class="btn btn-info">Ajouter</button></a>
</tr>
<tr class=" bg-success">
           <th>id</th>          <th>Nom Produit</th>  <th>Prix Produit</th>    <th>Quantite</th> <th>Images</th><th>description</th>       <th>Action</th>
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
        <a href="{{route('update_produit',['id'=>$product->id])}}"><button class="btn btn-warning"> <i class="fa fa-eyedropper" aria-hidden="true"></i> </button></a>
       <br>
           <form action="Product/{{$product->id}}" method="post">
               @csrf
               @method('delete')
             <td> <button type="submit" class="btn btn-danger" name="delete" value="Supprimer"> <i class="fa fa-trash" aria-hidden="true"></i></button>
             </td>
              
           </form>
</tr>

       @endforeach

</table>
        </div>
        </div>

 @endsection  

