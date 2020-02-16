@extends("layouts.layout")
@section('page_show')
<h2>Notre Boutique</h2>
    
<div class="row"> 
     @foreach($produits as $product)
    <div class="col-lg-2 col-sm-3 portfolio-item">
              <div class="card h-90">
                <a href="#"><img class="card-img-top"src="{{$product->product_image ? asset($product->product_image) : asset('uploads/images/default.png')}}" alt="image"></a>
                <p class="card-text"> {{$product->description}}
                </p>
                <div class="card-body"> <h3>Titre:</h3>{{$product->name}}
                  <h3 class="card-title">
                  <P>1KG</P>{{$product->price}}/FCFA
                  </h3>       
              </div>
                <h3 class="card-title">
                  <button type="button" class="btn btn-outline-success ">
                      <a href="Command/create ">Ajouter au panier</a> 
                  </button>         
                  </h3>
              </div>
          </div>
    @endforeach
</div>
</div>
@endsection    
