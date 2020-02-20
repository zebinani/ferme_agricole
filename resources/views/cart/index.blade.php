@extends("layouts.layout")
@section("cart_index")
<div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center">
    <h1 class="display-4"></h1>
    <p class="lead mb-0"> </p>
    <p class="lead"><a href="https://bootstrapious.com/snippets" class="text-white font-italic">
            <u></u></a>
    </p>
  </div>

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Produits</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Prix</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantites</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">supprimer</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach(Cart::content() as $product)
                  <tr>
                    <th scope="row" class="border-0">
                      <div class="p-2">
                        <img src="{{$product->product_image }}" alt="image" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$product->name}}</a></h5><span class="text-muted font-weight-normal font-italic d-block"></span>
                        </div>
                      </div>
                    </th>
                    <td class="border-0 align-middle"><strong>{{$product->price}}</strong></td>
                    <td class="border-0 align-middle"><strong>
                    
                        <center><input type="number" min="1"value="1" name="quantite" 
                          style="width:100px"class="form-control"required></center>
                    
                    </strong></td>
                    <td class="border-0 align-middle"><strong>
                    
                    <form action="{{route('cart.destroy', $product->rowId)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
                    
                    </form>
                  </tr>
                @endforeach  
              </tbody>
            </table>
             <div class="col-lg-">
                <div class="bg-light rounded-pill px-4 py-3 y text-uppercase font-weight-bold">
                       
                      <a href="/Command/create" class="btn btn-dark rounded-pill py-2 btn-block">RÉCAPITULATIF DE LA COMMANDE</a>
                </div>
              </div> 
          </div>
          <!-- End -->
        </div>
      </div>
<!--
      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Code promo</div>
          <div class="p-4">
            <p class="font-italic mb-4">Si vous avez un code promo, veuillez le saisir dans la case ci-dessous</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
              </div>
            </div>
          </div>
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
          <div class="p-4">
            <p class="font-italic mb-4">Si vous avez des informations sur le vendeur, vous pouvez les laisser dans la case ci-dessous</p>
            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">
                   RÉCAPITULATIF DE LA COMMANDE </div>
          <div class="p-4">
            <p class="font-italic mb-4"> Les frais d'expédition et supplémentaires sont calculés en fonction des valeurs que vous avez saisies.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">somme total </strong><strong>$390.00</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">frais de livraison</strong><strong>$10.00</strong></li>
              
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">$400.00</h5>
              </li>
            </ul><a href="/Command/create" class="btn btn-dark rounded-pill py-2 btn-block">Commander</a>
          </div>
        </div>
-->
      </div>

    </div>
  </div>
</div>
@endsection