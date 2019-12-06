@extends("layout")

@section("EMP_section")

<table class="table table-striped">
       <tr>
           <th>#</th> <th>id</th>    <th>matriclue</th> <th>nom</th><th>prenom</th> <th>adresse</th>    <th>telephone</th>       <th></th>
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
               <th></th>
           </tr>
       @endforeach
   </table>
   <p><a href="{{route('editer_Employs',['id'=>$employ->id])}}">Editer</a>

</p>

@endsection