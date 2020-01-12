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
              
                <td>
                
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
  Ajouter 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('Client.store')}}" method="post">
                    @csrf
                         

                    <div>
                      <label for="num_client">NUM_CLIENT </label>
                    <div>
                        <input type="text" name="num_client" class="form-control is-valid" required>
                   
                        </div>
                       <div>
                      <label for="NOM" > NOM </label>
                    <div>
                    <div>
                        <input type="text" name="nom" class="form-control is-valid" required>
                    </div>
                    <div>
                      <label for="prenom" > PRENOM </label>
                    <div>
                    <div>
                        <input type="text" name="prenom" class="form-control is-valid" required>
                    </div>
                    <div>
                      <label for="adresse" > ADRESSE </label>
                    <div>
                    <div>
                        <input type="text" name="adresse" class="form-control is-valid" required>
                    </div>
                    <div>
                      <label for="telephone" > TELEPHONE </label>
                    <div>
                    <div>
                        <input type="telephone" name="telephone" class="form-control is-valid" required>
                    </div>
                    <br>
                   
                    <br>
                </form>
            
      </div>
      <div class="modal-footer">
      <input type="reset" value="Effacer"><br> <br>
                        <button class="btn btn-primary">Enregistrer</button>
                        
                    
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</td>
                
                
                <td>
      

                <a href="{{route('Client.update',['id'=>$client->id])}}">
                <button class="btn btn-warning">Modifier</button> </a> 
                <!-- Button trigger modal -->

                </td>
    
              
               
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