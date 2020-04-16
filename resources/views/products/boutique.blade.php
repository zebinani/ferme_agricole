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
                  <a href="cart.index"><img class="card-img-top"src="{{$product->product_image ? asset($product->product_image) : asset('uploads/images/default.png')}}" alt="image" height="130"  ></a>
                  
                  </p>
                  <div class="card-body"> <h3> <p>{{$product->name}}</p> </h3>
                    <h4 class="card-title">
                    <p>
                     1KG
                     </p>
                     {{$product->getPrice()}}
                    </h4> 
                 </div>
              
                  <h3 class="card-title">
                   <a href="{{route('show_detail',['id'=>$product->id])}}"><button class="btn btn-warning"> Details</button></a>
                    </button>        
                  </h3>
              </div>
        </div>
     @endforeach 
     
</div>
 @endsection    
