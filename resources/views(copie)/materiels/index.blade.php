@extends("layout")

@section("sect_materiel")



<div class="container">
<table class="table table-striped">
       <tr>
           <th>#</th>          <th>Nom materiel</th>  <th>description</th>    
           
           <th>AMORTISSEMENT</th>        <th></th>
       </tr>
       
       @foreach($Materiels as $materiel)
   <tr>
       <th>#</th>
       <th>{{$materiel->name ?? ''}}</th>
       <th>{{$materiel->description ??''}} </th>
       <th>{{$materiel->amortissement ?? ''}} </th>
       <th>
        
 </th>
   </tr>
@endforeach

        </table>
        </div>
        
   @endsection