@extends("layout")
@section("EMP_section")

    <table class="table table-striped">
        <tr>
            <th>#</th> <th>id</th>    <th>Mat</th> <th>NOM</th><th>PRENOM</th> <th>ADRESSE</th>    <th>TELEPHONE</th>  
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

                
                <th> <a href="Employ/create">Ajouter</a></th>
                
                <th>  <p><a href="{{route('update.Employs',['id'=>$employ->id])}}">Editer</a>
                </th>
                
            </tr>
        @endforeach

    </table>

@endsection