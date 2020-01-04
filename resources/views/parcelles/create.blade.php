@extends("layouts.layout") 
@section('parcel_create')
<div><h1>{{__('Enregistrement d\'un prarcel')}}</h1></div>
          
                    <form action="{{route('Parcel.store')}}" method="post">
                        @csrf
                        <div>
                            <input type="text" name="rentabilite" class="form-control" placeholder="RENTABILITE">
                        </div>
                        <div>
                       <input type="text" name="categorie" class="form-control" placeholder="CATEGORIE">
                        </div>
                        <div>
                            <input type="text" name="type_de_sol" class="form-control" placeholder="TYPE DE SOL">
                        </div>
                        
                        
                        <div>
                            <button class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
     
@endsection

