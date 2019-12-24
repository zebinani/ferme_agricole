 @extends("layout")

@section("DEP_section")

<table class="table table-striped">
       <tr>
            <th>id</th>    <th>NOM</th> <th>EFFEECTIFS</th>
      
     @foreach($departments as $department)
          
           <tr>
               <th>#</th>
               <th>{{$department->id ?? ''}}</th>
               <th>{{$department->name ??''}}</th>
               <th>{{$department->effective ??''}}</th>
               
                 <th></th>
           </tr>
       @endforeach
</table>


@endsection