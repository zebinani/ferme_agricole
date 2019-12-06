

   <div class="container">
       <div><h1>{{__('Enregistrement d\'un produit')}}</h1></div>
       <div class="container">
           <form action="{{route('employers.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="matricule" class="form-control" placeholder="le nom du produit">
               </div>
               <div>
                   <input type="text" name="nom" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <input type="text" name="prenom" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <input type="text" name="adresse" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <input type="text" name="telephone" class="form-control" placeholder="Le prix du produit">
               </div>
              
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
