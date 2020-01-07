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
         <div><label for="client">CLIENT</label></div>
         <select name="client_id" id="Clients" class="form-control" required autocomplete="Cient_id" >
                        <option value=""></option>
                        @foreach($Clients as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                    
        
          </div> 
          <div><label for="client">ARTICLE</label></div>
         <div><input type="text" name="article" class="form-control" value="{{$Commandes->article}}"> </div>
         <div><label for="client">REFERENCE</label></div>
         <div><input type="text" name="reference" class="form-control"  value="{{$Commandes->reference}}"> </div>
         <div><label for="client">QUANTITE</label></div>
         <div><input type="text" name="quantite" class="form-control"  value="{{$Commandes->quantite}}"> </div>
         <div><label for="client">DATE</label></div>
         <div><input type="date" name="date" class="form-control"  value="{{$Commandes->date}}"> </div>
         
         <div> <button class="btn btn-primary">Enregistrer</button> </div>
         </Fieldset>
         <br>
      </form>

   </div>

 @endsection  
