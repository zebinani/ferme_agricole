@extends("layouts.layout")
@section("EMP_section")
  <div class="row justify-content-center ">
          <div class="col-8 "><h1>Liste des employes</h1></div>
      <div class="container  justify-content-center ">
            @if(session('success'))
              <div class="alert alert-success">{{session('success')}}</div>
            @endif

          <div class="col ">
              <a href="Employ/create"> <button>Ajouter</button>  </a> 
              <table class="table table-bodered">
                        <thead>
                            <tr class=" bg-success">
                                <th>#</th> <th>ID</th>    <th>MATRICULE</th> <th>NOM</th><th>PRENOM</th> <th>ADRESSE</th>    <th>TELEPHONE</th>  <th>DEPARTEMENT</th> 
                              <th></th>  <th>ACTION</th>  
                              
                                
                            </tr>
                        </thead>
                      @foreach($employs as $employ)
                      
                          <tr>
                              <td>#</td>
                              <td>{{$employ->id ?? ''}}</td>
                              <td>{{$employ->matricule ?? ''}}</td>
                              <td>{{$employ->nom ?? ''}}</td>
                              <td>{{$employ->prenom ?? ''}}</td>
                              <td>{{$employ->adresse ?? ''}}</td>
                              <td>{{$employ->telephone ?? ''}}</td>
                              <td>{{$employ->department->name ?? ''}}</td>               
                              <td>  
                              <a href="{{route('update.Employs',['id'=>$employ->id])}}"> <button class="btn btn-warning"> <i class="fa fa-eyedropper" aria-hidden="true"></i> </button></a>
                              </td>
                              
                              <form action="Employ/{{$employ->id}}" method="post">
                                @csrf
                                @method('delete')
                                <td>  
                                <button type="submit" class="btn btn-danger" name="delete" value="Supprimer"> <i class="fa fa-trash" aria-hidden="true"></i></button>
                              
                                </td>
                              </form>                
                              
                          </tr>
                          
                      @endforeach

              </table>
          </div>
      </div>
  </div>
@endsection