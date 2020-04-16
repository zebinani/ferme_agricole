@extends("layouts.layout")
@section('parcel_index')
  <br>
  <div class="container">
      <div><h1>{{__('Liste Des Parcel')}}</h1></div>
      
        <td> <a href="Parcel/create"><button type="button" class="btn btn-success">Ajouter </button></a>
        </td>

      <table class="table table-bodered">
          
          <tr>
          <th>#</th> <th>id</th>    <th>RENTABILITE</th> <th>Nbr_hectar</th><th>TYPE DE SOL</th>  <th>ACTIONS</th>
          </tr>

          @foreach($parcels as $parcel)
              <tr>
                  <td>#</td>
                  <td>{{$parcel->id ?? ''}}</td>
                  <td>{{$parcel->rentabilite ?? ''}}%</td>
                  <td>{{$parcel->Nbr_hectar ?? ''}}Hectar</td>
                  <td>{{$parcel->type_de_sol ?? ''}}</td> 
                  <td> 

                   <a href="{{route('Parcel.update',['id'=>$parcel->id])}}"> <button type="button" class="btn btn-warning"><i class="fa fa-eyedropper" aria-hidden="true" ></i> </button></a>
                  </td>

                  <form action="Parcel/{{$parcel->id}}" method="post">
                  @csrf
                  @method('delete')
                  <td> <button type="submit" class="btn btn-danger" name="delete" value="Supprimer"> <i class="fa fa-trash" aria-hidden="true"></i></button>
             </td>

                  </form>
              </tr>
          @endforeach

      </table>
  </div>
@endsection  
