@extends("layouts.layout")
@section("Com_index")

<div class="container">
<table class="table table-striped">
<br>
<div><h1>{{__('Liste Des Commandes')}}</h1></div>
<br>
        <tr>
            <th>#</th>  <th>id</th>   <th>Num_client</th>  <th>ARTICLE</th>  <th>REFERENCE</th> <th>QUANTITE</th>    <th>DATE</th>  <th>Ajouter</th> <th>Modifier</th> <th>Supprimer</th>
        </tr>

        @foreach($Commandes as $commande)
            <tr>
                <th>#</th>
                <td>{{$commande->id ?? ''}}</td>
                <td>{{$commande->client->num_client ?? ''}}</td>
                
                <td>{{$commande->article?? ''}}</td>
                <td>{{$commande->reference ?? ''}}</td>
                <td>{{$commande->quantite ?? ''}}</td>
                <td>{{$commande->date ?? ''}}</td>

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