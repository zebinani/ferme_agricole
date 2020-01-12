@extends("layouts.layout")
@section("EMP_section")
 
 <div class="row justify-content-center ">
 <div class="col-8 "><h1>Liste des employes</h1></div>
 <div class="container  justify-content-center ">
 @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
 <div class="col ">
 
    <table class="table table-bodered">
    <thead>
    <tr class=" bg-success">
            <th>#</th> <th>ID</th>    <th>MATRICULE</th> <th>NOM</th><th>PRENOM</th> <th>ADRESSE</th>    <th>TELEPHONE</th>  <th>Departement</th> <th>Ajouter</th> <th>Modifier</th> <th>Supprimer</th>
            
        </tr>
        </thead>
        @foreach($employs as $employ)
        <tbody>
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
             <a href="Employ/create">
                <button type="button" class="btn btn-success">
                Ajouter </button></a>

                </td>
                
                <td> 
                
                 <a href="{{route('update.Employs',['id'=>$employ->id])}}"> <button type="button" class="btn btn-warning">Editer </button></a>
                </td>
                
                <form action="Employ/{{$employ->id}}" method="post">
               @csrf
               @method('delete')
             <td>  <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
             </td>
              
           </form>                

            </tr>
            </tbody>
        @endforeach

    </table>
    </div>
    </div>
    </div>
@endsection