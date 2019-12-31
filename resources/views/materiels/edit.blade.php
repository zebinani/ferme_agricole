
@extends("layout")
@section("sect_edit_mat")

<form action="{{route('Materiel.edit',['id'=>$materiels->id])}}
" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="name" class="form-control" placeholder="NOM" value="{{$materiels->name}}"></div>

   <div><input type="text" name="description" class="form-control" placeholder="description" value="{{$materiels->description}}"> </div>

   <div><input type="text" name="amortissement" class="form-control" placeholder="Amortissement" value="{{$materiels->amortissement}}"> </div>

   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
@endsection
