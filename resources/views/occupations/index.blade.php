@extends("layout")

@section("section_occupation")


<table class="table table-striped">
       <tr>
           <th>#</th>          <th>TYPE</th>           <th>CATEGORIE</th>           <th>SALAIRE</th>
       </tr>
       @foreach($Occupations as $Occupation)
           <tr>
               <th>#</th>
               <th>{{$Occupation->type ??''}}</th>
               <th>{{$Occupation->categorie ?? ''}}</th>
               <th>{{$Occupation->salaire ?? ''}}</th>
               <th></th>
           </tr>
       @endforeach
   </table>

   

@endsection