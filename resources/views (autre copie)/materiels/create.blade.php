@extends("layout")
@section("sect_create_mat")



<div class="container">
       <div><h1>{{__('Enregistrement d\'un produit')}}</h1></div>
       <div class="container">
           <form action="{{route('materiels.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="name" class="form-control" placeholder="NOM">
               </div>
               <div>
                   <input type="text" name="description" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <input type="text" name="amortissement" class="form-control" placeholder="Le prix du produit">
               </div>
               
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>


@endsection