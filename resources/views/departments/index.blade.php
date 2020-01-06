 @extends("layouts.layout")

@section("DEP_index")

<table class="table table-striped">
       <tr>
            <th>id</th>    <th>NOM</th> <th>EFFEECTIFS</th>
      
     @foreach($departments as $department)
          
           <tr>
               <th>#</th>
               <td>{{$department->id ?? ''}}</td>
               <td>{{$department->name ??''}}</td>
               <td>{{$department->effective ??''}}</td>
               
                 <th></th>
           </tr>
       @endforeach

       
</table>


@endsection