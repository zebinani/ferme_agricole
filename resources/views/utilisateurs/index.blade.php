@extends('layout')
@section('utilis_index')
<div class="container">
<table class="table table-warning">
    <thead>
       <tr>
           <th>#</th>          <th>ID</th>  <th>NAME</th>   <th>EMAIL</th>  <th>ROLE</th>         
           
       </tr>
       </thead> 
     <tbody>  @foreach($users as $user)
   <tr>
       <th>#</th>
       <th>{{$user->id ?? ''}}</th>
       <th>{{$user->name ?? ''}}</th>
       <th>{{$user->email ??''}} </th>
       <th>{{$user->role ??''}} </th>
       <th><a href="/register"> ajouter</a></th>
        
     </tr> 
     </tbody>
     @endforeach

        </table>
         
</div>
@endsection