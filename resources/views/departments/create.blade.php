@extends('layouts.layout')
@section('DEP_create')

            
        <div class="container">
            <div><h1>{{__('Enregistrement d\'un departement')}}</h1></div>
               
                <form action="{{route('Department.store')}}" method="post">
                    @csrf
                   <div>
                       
                    <input type="text" name="name" class="form-control" 
                        placeholder="Department">
                    </div>
                
                    <input type="text" name="effective" class="form-control" 
                        placeholder="effective">
                    </div>
                    
                    <div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>

        </div>

@endsection
