@extends("layout")
@section("EMP_section")

    <table class="table table-sm">
    <thead>
        <tr>
            <th>#</th> <th>ID</th>    <th>NOM</th> <th>EMAIL</th><th>EMAIL DE VERIFICATION</th> <th>ADRESSE</th>    <th>TELEPHONE</th>  <th>Departement</th> <th>Ajouter</th> <th>modification</th> 
            
        </tr>
        </thead>
        @foreach($employs as $employ)
        <tbody>
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
            </tbody>
        @endforeach

    </table>

@endsection