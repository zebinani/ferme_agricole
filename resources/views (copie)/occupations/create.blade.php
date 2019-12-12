@extends("layout")

@section("create_occupation")


<div class="container">
       <div><h1>{{__('Enregistrement d\'un Occupation')}}</h1></div>
       <div class="container">
           <form action="{{route('occcupations.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="type" class="form-control" placeholder="type">
               </div>
               <div>
                   <input type="text" name="categorie" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <input type="text" name="salaire" class="form-control" placeholder="Le prix du produit">
               </div>
               
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>



@endsection