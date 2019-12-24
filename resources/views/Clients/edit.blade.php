@extends('layout')

@section('client_edit')

<div class="container">

      <form action="{{route('Client.edit',['id'=>$clients->id])}}" method="post">
         @csrf
         @method('patch')
         <div><input type="text" name="Num_client" class="form-control" placeholder="NUMERO CLIENT" value="{{$clients->num_client}}"></div>

         <div><input type="text" name="nom" class="form-control" placeholder="nom" value="{{$clients->nom}}"></div>

         <div><input type="text" name="prenom" class="form-control" placeholder="prenom" value="{{$clients->prenom}}"> </div>

         <div><input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{$clients->adresse}}"> </div>

         <div><input type="telephone" name="telephone" 
         
         class="form-control" placeholder="Telephone" value="{{$clients->telephone}}"> </div>
         
         <div> <button class="btn btn-primary">Enregistrer</button> </div>
      </form>

   </div>

 @endsection  
