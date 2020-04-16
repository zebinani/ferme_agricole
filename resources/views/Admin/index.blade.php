
@extends("layouts.layout")
@section("EMP_section")
<br>
    <div class="container">
    <h1>Liste Des utilisateurs </h1>
    
    <div><button><a href="User/create">Ajouter</a> </button></div>
    
    <div class="row">
    
    <table class="table table-sm">
    <thead>
        <tr class=" bg-success">
            <th>#</th> <th>ID</th>    <th>NOM</th> <th>EMAIL</th>  <th>ROLE</th> <th>ACTIONS</th> <th></th>
            
        </tr>
        </thead>
        @foreach($users as $user)
        <tbody>
            <tr>
                <td>#</th>
                <td>{{$user->id ?? ''}}</td>
                <td>{{$user->name ?? ''}}</td>
                <td>{{$user->email ?? ''}}</td>

                <td>{{$user->role ?? ''}}</td>

              <!--  <th>  <a href="User/create">Ajouter</a></th> -->

                <td>
                <p>
                <a href="{{route('User.update',['id'=>$user->id])}}">
                
                <button class="btn btn-warning"> <i class="fa fa-eyedropper" area-hidden="true" ></i></button> </a> 
                </p> 
                <form action="User/{{$user->id}}" method="post">
               @csrf
               @method('delete')
               <td> <button type="submit" class="btn btn-danger" name="delete" value="Supprimer"> <i class="fa fa-trash" aria-hidden="true"></i></button>
             </td>
             </form>
             </td>
            </tr>
           
            </tbody>
        @endforeach

    </table>
    </div>
    </div>
@endsection