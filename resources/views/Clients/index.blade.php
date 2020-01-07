@extends("layouts.layout")
@section("client_index")

<div class="container">
<table class="table table-bodered">
<br>
            <h1>LISTES DES CLIENTS</h1>
        <tr>

            <th>#</th>  <th>id</th>   <th>numero client</th>  <th>nom</th>  <th>PRENOM</th> <th>ADRESSE</th>    <th>TELEHONE</th>  <th>Ajouter</th> <th>Modifier</th>   

        </tr>

        @foreach($Clients as $client)
            <tr>
                <td>#</th>
                <td>{{$client->id ?? ''}}</td>
                <td>{{$client->num_client ?? ''}}</td>
                <td>{{$client->nom ?? ''}}</td>
                <td>{{$client->prenom?? ''}}</td>
                <td>{{$client->adresse ?? ''}}</td>
                <td>{{$client->telephone ?? ''}}</td>
              
                <td><a href="Client/create "><button class="btn btn-success">Ajouter</button> </a></td>
                
                <td><a href="{{route('Client.update',['id'=>$client->id])}}">
                <button class="btn btn-warning">Modifier</button> </a> </th>
               
              
               
                <form action="Client/{{$client->id}}" method="post">
               @csrf
               @method('delete')
             <td>  <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
             </td>
              
           </form>
            </tr>
            
        @endforeach
   </table>
 
   
   @endsection