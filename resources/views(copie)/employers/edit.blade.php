
@extends('layout')

@section("sect_Em_edit")
    <div class="container">
      <form action="{{route('editer_employs',['id'=>$Employs->id])}}" method="post">
         @csrf
         @method('patch')
         <div><input type="text" name="matricule" class="form-control" placeholder="le nom du produit" value="{{$Employs->matricule}}"></div>

         <div><input type="text" name="nom" class="form-control" placeholder="nom" value="{{$Employs->nom}}"> </div>

         <div><input type="text" name="prenom" class="form-control" placeholder="prenom" value="{{$Employs->prenom}}"> </div>

         <div><input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{$Employs->adresse}}"> </div>

         <div><input type="text" name="telephone" class="form-control" placeholder="Telephone" value="{{$Employs->telephone}}"> </div>
         
         <div> <button class="btn btn-primary">Enregistrer</button> </div>
      </form>
   </div>
@endsection