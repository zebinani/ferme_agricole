@extends('layout')
@section('client_edit')

<div class="container">

      <form action="{{route('Client.edit',['id'=>$clients->id])}}" method="post">
         @csrf
         @method('patch')
         <div><input type="text" name="Num_client" class="form-control" placeholder="NUMERO CLIENT" value="{{$clients->nom_client}}"></div>

         <div><input type="text" name="nom_client" class="form-control" placeholder="nom" value="{{$clients->nom_client}}"> </div>

         <div><input type="text" name="prenom_client" class="form-control" placeholder="prenom" value="{{$clients->prenom_client}}"> </div>

         <div><input type="text" name="adresse_client" class="form-control" placeholder="Adresse" value="{{$clients->adresse_client}}"> </div>

         <div><input type="telephone" name="telephone_client" class="form-control" placeholder="Telephone" value="{{$clients->telephone_client}}"> </div>
         
         <div> <button class="btn btn-primary">Enregistrer</button> </div>
      </form>

   </div>

 @endsection  
