@extends('layouts.layout')

@section('Admin_edit')



<div class="container">

      <form action="{{route('User.edit',['id'=>$User->id])}}" method="post">
         @csrf
         @method('patch')

         <div><input type="text" name="name" class="form-control" placeholder="NOM" value="{{$user->name}}"></div>

         <div><input type="text" name="email" class="form-control" placeholder="EMAIL" value="{{$user->email}}"> </div>

         <div><input type="text" name="password" class="form-control" placeholder="PASSWORD" value="{{$user->password}}"> </div>

         <div><input type="text" name="role" class="form-control" placeholder="ROLE" value="{{$user->adresse}}"> </div>

        
         
 
         
         <div> <button class="btn btn-primary">Enregistrer</button> </div>
      </form>

   </div>
   
     
 @endsection  
