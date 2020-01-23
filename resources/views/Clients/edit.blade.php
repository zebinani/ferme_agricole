@extends('layouts.layout')

@section('client_edit')

<br>

<div class="container">

      <form action="{{route('Client.edit',['id'=>$client->id])}}" method="post">
         @csrf
         @method('patch')
          
         <div><input type="text" name="num_client" class="form-control" placeholder="le nom du produit" value="{{$client->num_client}}"></div>

         <div><input type="text" name="nom" class="form-control" placeholder="nom" value="{{$client->nom}}"> </div>

         <div><input type="text" name="prenom" class="form-control" placeholder="prenom" value="{{$client->prenom}}"> </div>

         <div><input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{$client->adresse}}"> </div>

         <div><input type="telephone" name="telephone" class="form-control" placeholder="Telephone" value="{{$client->telephone}}"> </div>

         
 
         
         <div> <button class="btn btn-primary">Enregistrer</button> </div>
      </form>

   </div>
   
     
 @endsection  
