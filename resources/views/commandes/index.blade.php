@extends("layouts.layout")
@section("Com_index")

<div class="container">
<table class="table table-striped">
        <tr>
            <th>#</th>  <th>id</th>   <th>CLIENT</th>  <th>ARTICLE</th>  <th>REFERENCE</th> <th>QUANTITE</th>    <th>DATE</th>  <th>Ajouter</th> <th>Modifier</th> <th>Supprimer</th>
        </tr>

        @foreach($Commandes as $commande)
            <tr>
                <th>#</th>
                <th>{{$commande->id ?? ''}}</th>
                <th>{{$commande->client ?? ''}}</th>
                <th>{{$commande->article?? ''}}</th>
                <th>{{$commande->reference ?? ''}}</th>
                <th>{{$commande->quantite ?? ''}}</th>
                <th>{{$commande->date ?? ''}}</th>

                <th>
     <a href="Command/create "><button type="button" class="btn btn-success">Success</button>
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