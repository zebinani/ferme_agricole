@extends("layout")
@section("client_index")

<div class="container">
<table class="table table-striped">
        <tr>
            <th>#</th>  <th>id</th>   <th>numero client</th>  <th>nom</th>  <th>PRENOM</th> <th>ADRESSE</th>    <th>TELEHONE</th>  <th></th>  
        </tr>

        @foreach($Clients as $client)
            <tr>
                <th>#</th>
                <th>{{$client->id ?? ''}}</th>
                <th>{{$client->num_client ?? ''}}</th>
                <th>{{$client->nom ?? ''}}</th>
                <th>{{$client->prenom?? ''}}</th>
                <th>{{$client->adresse ?? ''}}</th>
                <th>{{$client->telephone ?? ''}}</th>
                

                <th>
            <a href="Client/create ">Ajouter</a>
                </th>
                
            </tr>
            
        @endforeach
   </table>
   
   </div>
   @endsection