@extends('layout')

@section('parcel.index')

<table class="table table-striped">
       <tr>
        <th>#</th> <th>id</th>    <th>RENTABILITE</th> <th>CATEGORIE</th><th>TYPE DE SOL</th>  
       </tr>
       @foreach($parcels as $parcel)
           <tr>
               <th>#</th>
               
               <th>{{$parcel->id ?? ''}}</th>
               <th>{{$parcel->rentabilite ?? ''}}</th>
               <th>{{$parcel-> categorie ?? ''}}</th>
               <th>{{$parcel-> type_de_sol ?? ''}}</th>
              
               <th>#</th>
           </tr>
</table>
       @endforeach
   
 @endsection 