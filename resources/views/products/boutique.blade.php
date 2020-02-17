@extends("layouts.layout")
@section('page_show')
<h2>Notre Boutique</h2>
@if(session('success'))

  <div class="alert alert-success">{{session('success')}}</div>
 
  @endif 
<div class="row"> 
     @foreach($produits as $product)
    <div class="col-lg-2 col-sm-3 portfolio-item">
              <div class="card h-90">
                <a href="#"><img class="card-img-top"src="{{$product->product_image ? asset($product->product_image) : asset('uploads/images/default.png')}}" alt="image"></a>
                <p class="card-text"> Nous disposons de tomate frais de tres bonne qualite.
                </p>
                <div class="card-body"> <h3>Titre:</h3>{{$product->name}}
                  <h3 class="card-title">
                  <P>1KG</P>{{$product->price}}/FCFA
                  </h3>       
              </div>
                <h3 class="card-title">
              <form action="{{route('cart.store')}}" method="POST">
              @csrf 
              <input type="hidden" name="id" value="{{$product->id}}">
              <input type="hidden" name="name" value="{{$product->name}}">
              <input type="hidden" name="price" value="{{$product->price}}">

                <button type="submit" class="btn btn-dark ">Ajouter au panier</button> 
              </form>
                         
                  </h3>
              </div>
          </div>
    @endforeach
</div>
 
@endsection    
