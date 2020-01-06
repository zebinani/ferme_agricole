@extends('layouts.layout')
@section('com_edit')
<div class="container">
<div class="row">
<div class="col">
<br>
      <form action="{{route('command_edit',['id'=>$Commande->id])}}" method="post">
         @csrf
         @method('patch')
         <div><input type="text" name="client" class="form-control" placeholder="le nom du produit" value="{{$Commande->client}}"></div>

         <div><input type="text" name="article" class="form-control" placeholder="nom" value="{{$Commande->article}}"> </div>

         <div><input type="text" name="reference" class="form-control" placeholder="prenom" value="{{$commande->reference}}"> </div>

         <div><input type="text" name="quantite" class="form-control" placeholder="Adresse" value="{{$Commande->quantite}}"> </div>

         <div><input type="date" name="date" class="form-control" placeholder="Telephone" value="{{$Commande->date}}"> </div>
         
         <div> <button class="btn btn-primary">Enregistrer</button> </div>
      </form>
   </div>

   
