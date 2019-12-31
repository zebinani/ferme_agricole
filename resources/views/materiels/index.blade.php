@extends("layout")

@section("sect_materiel")



<div class="container">
<table class="table table-striped">
       <tr>
           <th>#</th>          <th>Nom materiel</th>  <th>description</th>    
           
           <th>AMORTISSEMENT</th>        <th>Ajouter</th>
       </tr>
       
       @foreach($Materiels as $materiel)
   <tr>
       <th>#</th>
       <th>{{$materiel->name ?? ''}}</th>
       <th>{{$materiel->description ??''}} </th>
       <th>{{$materiel->amortissement ?? ''}} </th>
       <th>
       <a href="Materiel/create">Ajouter</a>
        </th>
        

<th> 
<button type="button" class="btn btn-warning">
<p><a href="{{route('Materiel.update',['id'=>$materiel->id])}}">Editer</a></button>
    </th>
   </tr>
@endforeach

        </table>
        </div>
        
   @endsection