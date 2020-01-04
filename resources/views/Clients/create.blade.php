@extends("layouts.layout")
@section("client_index")
<div class="container">
            <div><h1>{{__('Enregistrement d\'un client')}}</h1></div>

                <form action="{{route('Client.store')}}" method="post">
                    @csrf
                          @if($errors->any())
                        <!-- @foreach($errors->all() as $error) -->
                        <div class="alert alert-danger">Tous les champs sont obligatoires</div>
                        <!-- @endforeach -->
                        @endif

    

                    <div>
                        <input type="text" name="num_client" class="form-control is-valid" placeholder="NUMERO CLIENT">
                   

                  
                    <div>
                        <input type="text" name="nom" class="form-control is-valid" placeholder="NOM">
                    </div>
                    <div>
                        <input type="text" name="prenom" class="form-control is-valid" placeholder="PRENOM">
                    </div>
                    <div>
                        <input type="text" name="adresse" class="form-control is-valid" placeholder="ADRESSE">
                    </div>
                    <div>
                        <input type="telephone" name="telephone" class="form-control is-valid" placeholder="TELEPHONE">
                    </div>
                    
                    <div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            
        </div>
      @endsection