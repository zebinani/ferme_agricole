@extends('layouts.layout')
@section('Prod_index')
<div class="container">
<div class="row">

<div><h1>{{__('Liste Des Productions')}}</h1></div>
<table class="table table-striped">
       <tr class=" bg-success">
        <th>#</th> <th>id</th>    <th>TYPE</th> <th>PERIODE</th><th>DESTINATION</th>     
       </tr>
       @foreach($Productions as $production)
           <tr>
               <td>#</th>
               <td>{{$production->id ?? ''}}</td>
               <td>{{$production->type ?? ''}}</td>
               <td>{{$production->periode ?? ''}}</td>
               <td>{{$production->destination ?? ''}}</td>
               
               
           </tr>

       @endforeach
       
   </table>
 </div>
 </div>
 @endsection 
   
