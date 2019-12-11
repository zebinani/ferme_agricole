@extends("layout")

@section("section_occupation")


<table class="table table-striped">
       <tr>
           <th>#</th>          <th>TYPE</th>           <th>CATEGORIE</th>           <th>SALAIRE</th>
       </tr>
       @foreach($Occupations as $occupation)
           <tr>
               <th>#</th>
               <th>{{$occupation->type ??''}}</th>
               <th>{{$occupation->categorie ?? ''}}</th>
               <th>{{$occupation->salaire ?? ''}}</th>
               <th></th>
           </tr>
       @endforeach
   </table>



@endsection