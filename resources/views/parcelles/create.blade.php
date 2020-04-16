@extends("layouts.layout") 
    @section('parcel_create')
        <div class="row">
            <div class=".col-lg-5 md-3 sm-2 ">

                <div><h1>{{__('Enregistrement d\'un prarcel')}}</h1></div>
                       <br>
                    
                                <form action="{{route('Parcel.store')}}" method="post">
                                    @csrf
                                    <div>
                                        <input type="text" name="rentabilite" class="form-control"required placeholder="RENTABILITE">
                                    </div>
                                    <br>
                                    <div>
                                <input type="text" name="Nbr_hectar" class="form-control"required placeholder="Nbr_hectar">
                                    </div>
                                    <br>
                                    <div>
                                        <input type="text" name="type_de_sol" class="form-control"required placeholder="TYPE DE SOL">
                                    </div>
                                    <br>
                                    <div>
                                        <button class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
            </div>   
        </div>   
    @endsection

