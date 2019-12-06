

<form action="{{route('product.update',['id'=>$product->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="matricule" class="form-control" placeholder="le nom du produit" value="{{$Employs->matricule}}"></div>
   <div><input type="text" name="nom" class="form-control" placeholder="Le prix du produit" value="{{$Employ->nom}}"> </div>
   <div><input type="text" name="prenom" class="form-control" placeholder="Le prix du produit" value="{{$Employs->prenom}}"> </div>
   <div><input type="text" name="adresse" class="form-control" placeholder="Le prix du produit" value="{{$Employs->adresse}}"> </div>
   <div><input type="text" name="telephone" class="form-control" placeholder="Le prix du produit" value="{{$Employs->telephone}}"> </div>
   
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
