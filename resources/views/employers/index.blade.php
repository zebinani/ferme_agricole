@extends("layout")

@section("EMP_section")

<table class="table table-striped">
       <tr>
           <th>#</th> <th>id</th>    <th>Matricule</th> <th>NOM</th><th>PRENOM</th> <th>ADRESSE</th>    <th>TELEPHONE</th>       <th></th>
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
   <p><a href="{{route('editer_materiel',['id'=>$materiel->id])}}">Editer</a>

</p>

@endsection