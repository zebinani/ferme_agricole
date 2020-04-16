@extends("layouts.layout")
@section("Com_create")
<div class="container ">
<div class="row 10 ">
    <div class="col-">
    <div><h1>{{__('Enregistrement d\'une commande')}}</h1></div>

    </div>
<div class="col-8 ">
    <br>
        <form action="{{route('Command.store')}}" method="post" autocomplete="on">
                    @csrf
                    
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
                    
                        <center> <input type="number" min="1"value="1" name="quantite" 
                          style="width:100px"class="form-control"required> </center>
                    
                    </strong></td>
                    <td class="border-0 align-middle"><strong>
                    
                  
                  </tr>
                @endforeach  
              </tbody>
            </table>
            </div>
                <div class="row-4">
                    <div><label for="text">ARTICLE</label><div>
                    <select id="product"name="article" class="form-control" required >
                    
                        <option value="Banane">BANANE</option>
                        <option value="mangue">MANGUE</option>
                        <option value="legume">LEGUME</option>
                        <option value="carotte">CAROTTE</option> 
                        <option  value="orange" selected>select</option>
                    </select>

                </div>
                    <br>
                    <div class="row-4">
                    <div><label for="quantite">QUANTITE</label><div>
                        <input type="number" name="quantite" class="form-control" required>
                    </div>
                    
                <div class="row-4">
                    <div><label for="text">ADRESSE</label><div>
                        <input type="text" name="adresse" class="form-control" required >
                    </div>
                    <br>
                 <div class="row-4">
                    <div><label for="phone">TELEPHONE</label><div>
                        <input type="tel" name="phone" class="form-control" required >
                    </div>
                   
                    <br>
                    <div>
                    
                    <input type="reset" value="Effacer">
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                    <br>
                    <br>
                    
                </form>
                

</div>
</div>
</div>
      @endsection


      