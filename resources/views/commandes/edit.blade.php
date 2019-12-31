@extends('layouts.layout')
@section('Com_edit')

<div class="container">

      <form action="{{route('command.edit',['id'=>$Commandes->id])}}" method="post">
         @csrf
         @method('patch')
         <div><input type="text" name="client" class="form-control" placeholder="le nom du produit" value="{{$Commandes->client}}"></div>

         <div><input type="text" name="article" class="form-control" placeholder="nom" value="{{$Commandes->article}}"> </div>

         <div><input type="text" name="reference" class="form-control" placeholder="prenom" value="{{$Commandes->reference}}"> </div>

         <div><input type="text" name="quantite" class="form-control" placeholder="Adresse" value="{{$Commandes->quantite}}"> </div>

         <div><input type="date" name="date" class="form-control" placeholder="Telephone" value="{{$Commandes->date}}"> </div>
         
         <div> <button class="btn btn-primary">Enregistrer</button> </div>
      </form>

   </div>

 @endsection  
