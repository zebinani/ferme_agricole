@extends('layouts.layout')
@section('Prod_index')
<table class="table table-striped">
       <tr>
        <th>#</th> <th>id</th>    <th>TYPE</th> <th>PERIODE</th><th>DESTINATION</th>     
       </tr>
       @foreach($Productions as $production)
           <tr>
               <th>#</th>
               <th>{{$production->id ?? ''}}</th>
               <th>{{$production->type ?? ''}}</th>
               <th>{{$production->periode ?? ''}}</th>
               <th>{{$production->destination ?? ''}}</th>
               
               <th></th>
           </tr>

       @endforeach
       
   </table>
 @endsection 
   
