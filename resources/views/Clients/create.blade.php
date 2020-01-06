@extends("layouts.layout")
@section("client_index")
<div class="container">
<div class="row">
<div class="col-10">
    <br>
            <div><h1>{{__('Enregistrement d\'un client')}}</h1></div>

                <form action="{{route('Client.store')}}" method="post">
                    @csrf
                          @if($errors->any())
                        <!-- @foreach($errors->all() as $error) -->
                        <div class="alert alert-danger">Tous les champs sont obligatoires</div>
                        <!-- @endforeach -->
                        @endif

                    <div>
                      <label for="num_client">NUM_CLIENT </label>
                    <div>
                        <input type="text" name="num_client" class="form-control is-valid" >
                   
                        </div>
                       <div>
                      <label for="NOM" > NOM </label>
                    <div>
                    <div>
                        <input type="text" name="nom" class="form-control is-valid" >
                    </div>
                    <div>
                      <label for="prenom" > PRENOM </label>
                    <div>
                    <div>
                        <input type="text" name="prenom" class="form-control is-valid" >
                    </div>
                    <div>
                      <label for="adresse" > ADRESSE </label>
                    <div>
                    <div>
                        <input type="text" name="adresse" class="form-control is-valid" >
                    </div>
                    <div>
                      <label for="telephone" > TELEPHONE </label>
                    <div>
                    <div>
                        <input type="telephone" name="telephone" class="form-control is-valid" >
                    </div>
                    <br>
                    <div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                    <br>
                </form>
            
        </div>
        </div>
        </div>
      @endsection