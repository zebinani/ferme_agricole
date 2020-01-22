@extends("layouts.layout")
@section('parcel_index')
<br>
<div><h1>{{__('Liste Des Parcel')}}</h1></div>

<table class="table table-striped">
       <tr>
        <th>#</th> <th>id</th>    <th>RENTABILITE</th> <th>Nbr_hectar</th><th>TYPE DE SOL</th>  <th>Test</th>
       </tr>
  @foreach($parcels as $parcel)
        <tr>
               <th>#</th>
               
               <td>{{$parcel->id ?? ''}}</td>
               <td>{{$parcel->rentabilite ?? ''}}</td>
               <td>{{$parcel->Nbr_hectar ?? ''}}</td>
               <td>{{$parcel->type_de_sol ?? ''}}</td>
              
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
