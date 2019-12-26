




<form action="{{route('productions.edite',['id'=>$Productions->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="type" class="form-control" placeholder="type de production" value="{{$Productions->type}}"></div>

   <div><input type="text" name="periode" class="form-control" placeholder="nom" value="{{$Productions->periode}}"> </div>

   <div><input type="text" name="destination" class="form-control" placeholder="prenom" value="{{$Productions->destination}}"> </div>

   
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

