@extends("layout")
@section("index_product")

  

 
       <tr>
           <th>#</th>          <th>Nom Produit</th>  <th>Prix Produit</th>    <th>Quantite</th>        <th></th>
       </tr>
       
       @foreach($products as $product)
   <tr>
       <th>#</th>
       <th>{{$product->name}}</th>
       <th>{{$product->price}} </th>
       <th>{{$product->quantity}} </th>
       <th>
           <p><a href="{{route('update_produit',['id'=>$product->id])}}">Editer</a></p>
       </th>

       <th>
           <p><a href="{{route('Product.create')}}">ajouter</a></p>
       </th>
       
       
   </tr>
@endforeach

        </table>
        </div>

   

