@extends("layouts.layout")
@section("Com_index")

<div class="container">
<table class="table table-striped">
<br>
<div><h1>{{__('Liste Des Commandes')}}</h1></div>
<br>
        <tr>
            <  <th>id</th>   <th>Num_client</th>  <th>ARTICLE</th>  <th>REFERENCE</th> <th>QUANTITE</th>    <th>DATE</th>  <th>  <a href="Command/create "><button type="button" class="btn btn-success">Ajouter</button>
</a></th> <th>Modifier</th> <th>Supprimer</th>
        </tr>

        @foreach($Commandes as $commande)
            <tr>
                
                <td>{{$commande->id ?? ''}}</td>
                <td>{{$commande->client->article ?? ''}}</td>
                <td>{{$commande->reference ?? ''}}</td>
                <td>{{$commande->quantite ?? ''}}</td>
                <td>{{$commande->adresse ?? ''}}</td>
                <td>{{$commande->phone ?? ''}}</td>

                <th>
     <a href="Command/create "><button type="button" class="btn btn-success">Ajouter</button>
</a>
                </th>
                <th>  <p><a href="{{route('Command_update',['id'=>$commande->id])}}"><button type="button" class="btn btn-warning">Modifier</button></a>
                </th>

                <form action="Command/{{$commande->id}}" method="post">
               @csrf
               @method('delete')
             <td>  <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
             </td>
              
           </form>
            </tr>
            
        @endforeach
   </table>
   
   </div>
   @endsection