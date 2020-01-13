@extends("layouts.layout")
@section("sect_create_mat")


<div class="container ">
    <div class="row justify-content-center">
    <div class="col-8">
            <h1>test</h1>
            <div><h1>{{__('Enregistrement d\'un employer')}}</h1></div>
                <form action="{{route('Materiel.store')}}" method="post">
                    @csrf
                    <div>
                        <input type="text" name="name" class="form-control"  required placeholder="nom">
                    </div>
                    <div>
                        <input type="text" name="description" class="form-control"required placeholder="description">
                    </div>
                    <div>
                        <input type="text" name="amortissement" class="form-control"required placeholder="amortissement">
                    </div>
                    
                    <div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
    </div>
    </div>
        </div>


@endsection