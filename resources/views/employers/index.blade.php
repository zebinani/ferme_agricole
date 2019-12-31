@extends("layouts.layout")
@section("EMP_section")

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th> <th>ID</th>    <th>MATRICULE</th> <th>NOM</th><th>PRENOM</th> <th>ADRESSE</th>    <th>TELEPHONE</th>  <th>Departement</th> <th>Ajouter</th> <th>modification</th> 
            
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
                <button type="button" class="btn btn-success">
                <a href="Employ/create">Ajouter</a>
                </button>
                </td>
                
                <td> 
                <button type="button" class="btn btn-warning">
                 <p><a href="{{route('update.Employs',['id'=>$employ->id])}}">Editer</a></button>
                </td>
                

            </tr>
            </tbody>
        @endforeach

    </table>

@endsection