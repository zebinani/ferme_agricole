
@extends("layouts.layout")
@section("sect_edit_mat")

<form action="{{route('Materiel.edit',['id'=>$materiels->id])}}
" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="name" class="form-control" placeholder="NOM" value="{{$materiels->name}}"></div>   

   <div><input type="text" name="amortissement" class="form-control" placeholder="Amortissement" value="{{$materiels->amortissement}}"> </div>
   <div><input type="text" name="description" class="form-control" placeholder="description" value="{{$materiels->description}}"> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
@endsection
@extends("layouts.layout")

@section("sect_materiel")



<div class="container">
<table class="table table-striped">
       <tr>
           <th>#</th>          <th>Nom materiel</th>  <th>description</th>    
           
           <th>AMORTISSEMENT</th>        <th>Ajouter</th>
       </tr>
       
       @foreach($materiels as $materiel)
   <tr>
       <th>#</th>
       <th>{{$materiel->name ?? ''}}</th>
       <th>{{$materiel->amortissement ?? ''}} </th>
       <th>{{$materiel->description ??''}} </th>
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
        
   @endsection
   