@extends("layout")
@section("EMP_section")

    <table class="table table-striped">
        <tr>
            <th>#</th> <th>ID</th>    <th>MATRICULE</th> <th>NOM</th><th>PRENOM</th> <th>ADRESSE</th>    <th>TELEPHONE</th>  <th>Departement</th> <th>Ajouter</th> <th>modification</th> 
            
        </tr>
        @foreach($employs as $employ)
            <tr>
                <th>#</th>
                <th>{{$employ->id ?? ''}}</th>
                <th>{{$employ->matricule ?? ''}}</th>
                <th>{{$employ->nom ?? ''}}</th>
                <th>{{$employ->prenom ?? ''}}</th>
                <th>{{$employ->adresse ?? ''}}</th>
                <th>{{$employ->telephone ?? ''}}</th>
                <th>{{$employ->department->name ?? ''}}</th>


                
                <th> 
                <button type="button" class="btn btn-success">
                <a href="Employ/create">Ajouter</a>
                </button>
                </th>
                
                <th> 
                <button type="button" class="btn btn-warning">
                 <p><a href="{{route('update.Employs',['id'=>$employ->id])}}">Editer</a></button>
                </th>
               
            </tr>
        @endforeach

    </table>

@endsection