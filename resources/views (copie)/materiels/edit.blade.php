
@extends("layout")
@section("sect_edit_mat")

<form action="{{route('update_materiel',['id'=>$materiel->id])}}
" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="nom" class="form-control" placeholder="NOM" value="{{$materiel->name}}"></div>
   <div><input type="text" name="price" class="form-control" placeholder="description" value="{{$materiel->description}}"> </div>
   <div><input type="text" name="amortissement" class="form-control" placeholder="Amortissement" value="{{$materiel->description}}"> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
@endsection