@extends('layouts.layout')
@section('Prod_creation')
<div class="container">
       <div><h1>{{__('Enregistrement d\'une production')}}</h1></div>
       <div class="container">
           <form action="{{route('Production.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="type" class="form-control" placeholder="Type">
               </div>
               <div>
                   <input type="text" name="periode" class="form-control" placeholder="periode">
               </div>
               <div>
                   <input type="text" name="destination" class="form-control" placeholder="destination">
               </div>
               
                  
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>

 </div>
@endsection 