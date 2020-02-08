@extends('layouts.layout')
@section('Admin.edit')
<br> <br>
<div class="container">

      <form action="{{route('User.edit',['id'=>$Users->id])}}" method="post">
      
         @csrf
         @method('patch')

         <div>

         <input type="text" name="name" class="form-control" placeholder="NOM" value="{{$Users->name}}">
         </div>

         <div><input type="email" name="email" class="form-control" placeholder="EMAIL" value="{{$Users->email}}"> </div>

         <div><input type="password" name="password" class="form-control" placeholder="EMAIL" value="{{$Users->password}}"> </div>

         <div>
                     <select  type="text" name="role" class="form-control" value="{{$Users->role}}">

                        <option value="Admin" {{$Users->role==='Admin'? 'selected="selected" ':''}}>Admin</option>

                        <option value="User" {{$Users->role==='User'? 'selected="selected" ':''}}>User</option>
                        
                        
                        
                     </select>
         </div>

         <div> <button class="btn btn-primary">Enregistrer</button> </div>
      </form>

</div>
   
   @endsection