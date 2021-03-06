@extends("layouts.layout")
@section("page_show")
<h2>Notre Boutique</h2>

   @if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>
  @endif 
  @if(session('error'))
   <div class="alert alert-success">{{session('success')}}</div>
  @endif 
  <div class="row"> 
        <div class="col-lg-4 col-sm-3 portfolio-item">
            <div class="card h-90">
              <a href="cart.index"><img class="card-img-top"src="{{$product->product_image ? asset($product->product_image) : asset('uploads/images/default.png')}}" alt="image"></a>
              <div class="badge badge-pill badge-info">{{$stock}}</div>
                <p class="card-text"> {{$product->description}}</p>
                <p class="card-body"> <h3>{{$product->name}} </h3></p>
                  <h4 class="card-title">
                    <P>1KG</P>{{$product->getPrice()}} </p>
                  </h4> 
            </div>
              
                <h3 class="card-title">
                    @if($stock === 'disponible')
                    
                  <form action="{{route('cart.store')}}" method="POST">
                  @csrf 
                  <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button type="submit" class="btn btn-dark ">Ajouter au panier</button> 
                  </form>
                  @endif           
                </h3>
        </div>
  </div>
@endsection    