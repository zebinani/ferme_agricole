@extends("layouts.layout")
@section('parcel_index')
<table class="table table-bodered">
       <tr>
        <th>#</th> <th>id</th>    <th>RENTABILITE</th> <th>CATEGORIE</th><th>TYPE DE SOL</th>  <th>Test</th>
       </tr>
  @foreach($parcels as $parcel)
        <tr>
               <th>#</th>
               
               <th>{{$parcel->id ?? ''}}</th>
               <th>{{$parcel->rentabilite ?? ''}}</th>
               <th>{{$parcel->categorie ?? ''}}</th>
               <th>{{$parcel->type_de_sol ?? ''}}</th>
              
               <th>#</th>



               <td> <a href="Parcel/create">
                <button type="button" class="btn btn-success">
                Ajouter </button></a>
                
                </td>
                
                <td> 
                
                 <a href="{{route('Parcel.update',['id'=>$parcel->id])}}"> <button type="button" class="btn btn-warning">Editer </button></a>
                </td>
                
                <form action="Parcel/{{$parcel->id}}" method="post">
               @csrf
               @method('delete')
             <td>  <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
             </td>
              
           </form>
        </tr>
  @endforeach

</table>
       
 @endsection  
