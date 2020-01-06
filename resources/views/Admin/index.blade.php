
@extends("layouts.layout")
@section("EMP_section")

    <table class="table table-sm">
    <thead>
        <tr>
            <th>#</th> <th>ID</th>    <th>NOM</th> <th>EMAIL</th>  <th>ROLE</th> <th>Ajouter</th> <th>modification</th> 
            
        </tr>
        </thead>
        @foreach($users as $user)
        <tbody>
            <tr>
                <th>#</th>
                <th>{{$user->id ?? ''}}</th>
                <th>{{$user->name ?? ''}}</th>
                <th>{{$user->email ?? ''}}</th>

                <th>{{$user->role ?? ''}}</th>

                
                <th>  <a href="User/create">Ajouter</a></th>

                <td><a href="{{route('User.update',['id'=>$user->id])}}">
                
                <button class="btn btn-warning">Modifier</button> </a> </th>

                <form action="User/{{$user->id}}" method="post">
               @csrf
               @method('delete')
             <td>  <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
             </td>
            </tr>
           
            </tbody>
        @endforeach

    </table>

@endsection