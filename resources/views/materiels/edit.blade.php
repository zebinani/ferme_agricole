
@extends("layout")
@section("sect_edit_mat")

<form action="{{route('update_materiel',['id'=>$Materiels->id])}}
" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="nom" class="form-control" placeholder="NOM" value="{{$Materiels->name}}"></div>

   <div><input type="text" name="price" class="form-control" placeholder="description" value="{{$Materiels->description}}"> </div>

   <div><input type="text" name="amortissement" class="form-control" placeholder="Amortissement" value="{{$Materiels->description}}"> </div>

   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
@endsection
