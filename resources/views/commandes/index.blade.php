@extends("layouts.layout")
@section("Com_index")

<div class="container">
<table class="table table-striped">
<br>
<div><h1>{{__('Liste Des Commandes')}}</h1></div>
<br>
        <tr>
            <th>id</th>   <th>ARTICLE</th>  <th>REFERENCE</th> <th>QUANTITE</th>    <th>ADRESSE</th> <th>telephone</th> <th>ACTIONS</th> <th>  <a href="Command/create "><button type="button" class="btn btn-success">Ajouter</button>
</a></th> 
        </tr>

        @foreach($Commandes as $commande)
            <tr>
                
                <td>{{$commande->id ?? ''}}</td>
                <td>{{$commande->article ?? ''}}</td>
                <td>{{$commande->reference ?? ''}}</td>
                <td>{{$commande->quantite ?? ''}} <p>kg</p>  </td>
                <td>{{$commande->adresse ?? ''}}</td>
                <td>{{$commande->phone ?? ''}}</td>

                
                 
                <td>
                 <p><a href="{{route('Command_update',['id'=>$commande->id])}}"><button type="button" class="btn btn-warning">Modifier</button></a> </p>
                 
                     
                <form action="Command/{{$commande->id}}" method="post">
               @csrf
               @method('delete')
             <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
             </td>
              
           </form>
            </tr>
            </th>
        @endforeach
   </table>
   
   </div>
   @endsection