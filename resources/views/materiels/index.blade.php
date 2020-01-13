@extends("layouts.layout")

@section("sect_materiel")
<br>
<div class="container">
<h1>LISTES DES Materiel</h1>
<div class="row justify-content-center ">
 <div class="col-8 align-items-center">
 <table class="table table-striped">
       <tr>
           <th>#</th>          <th>Nom materiel</th>  <th>description</th>    
           
           <th>AMORTISSEMENT</th>        <th>Ajouter</th> <th>Modifier</th>
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
<a href="{{route('Materiel.update',['id'=>$materiel->id])}}">Editer</a></button>
    </th>
   </tr>
@endforeach

        </table>
        </div>        
        </div>
</div>
@endsection