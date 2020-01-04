@extends('layouts.layout')
@section('parcel-edit')
<form action="{{route('Parcel.edit',['id'=>$parcels->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="rentabilte" class="form-control" placeholder="RENTABILITE" value="{{$parcels->rentabilite}}"></div>

   <div><input type="text" name="categorie" class="form-control" placeholder="categorie" value="{{$parcels->categorie}}"> </div>

   <div><input type="text" name="type_de_sol" class="form-control" placeholder="tepe de sol" value="{{$parcels->type_de_sol}}"> </div>

   
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

@stop