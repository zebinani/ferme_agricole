@extends('layouts.layout')
@section('Com_edit')
<br>
<div class="container">
<div class="row ">
<div class="col-7">
<br>
        
      <form action="{{route('command.edit',['id'=>$Commandes->id])}}" method="post" autocomplete="on">
         @csrf
         @method('patch')
         <Fieldset>
         <div>
         
          <div><label for="Command">ARTICLE</label></div>
         <div><input type="text" name="article" class="form-control" value="{{$Commandes->article}}"> </div>

         <div><label for="Command">REFERENCE</label></div>
         <div><input type="text" name="reference" class="form-control"  value="{{$Commandes->reference}}"> </div>

         <div><label for="Command">QUANTITE</label></div>
         <div><input type="number"name="quantite"class="form-control"value="{{$Commandes->quantite}}"> </div>

         <div><label for="Command">ADRESSE</label></div>
         <div><input type="text" name="adresse" class="form-control"  value="{{$Commandes->adresse}}"> </div>

         <div><label for="Command">telephone</label></div>
         <div><input type="tel" name="phone" class="form-control"  value="{{$Commandes->phone}}"> </div>
         <br>
         <div> <button class="btn btn-primary">Enregistrer</button> </div>
         </Fieldset>
         <br>
      </form>
   
   </div>

 @endsection  
