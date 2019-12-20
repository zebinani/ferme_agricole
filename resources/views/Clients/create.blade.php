@extends("layout")
@section("client_index")
<div class="container">
            <div><h1>{{__('Enregistrement d\'un client')}}</h1></div>

                <form action="{{route('Client.store')}}" method="post">
                    @csrf
                    <div>
                        <input type="text" name="num_client" class="form-control" placeholder="NUMERO CLIENT">
                    </div>
                    <div>
                        <input type="text" name="nom" class="form-control" placeholder="NOM">
                    </div>
                    <div>
                        <input type="text" name="prenom" class="form-control" placeholder="PRENOM">
                    </div>
                    <div>
                        <input type="text" name="adresse" class="form-control" placeholder="ADRESSE">
                    </div>
                    <div>
                        <input type="telephone" name="telephone" class="form-control" placeholder="TELEPHONE">
                    </div>
                    
                    <div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>

        </div>
      @endsection