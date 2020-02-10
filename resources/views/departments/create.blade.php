@extends('layouts.layout')
@section('DEP_create')

<div class="container">  
    <div class="row"> 
        <div class="col-6">   
        <br>     
            <div class="container">
                <div><h1>{{__('Enregistrement d\'un departement')}}</h1></div>
                <br>
                    <form action="{{route('Department.store')}}" method="post">
                        @csrf
                    <div>
                        
                        <input type="text" name="name" class="form-control" 
                        required placeholder="Department">
                        </div>
                        <br>
                        <div>
                        <input type="text" name="effective" class="form-control" 
                        required placeholder="effective">
                        </div>
                        <br>
                        <div>
                            <button class="btn btn-primary">Enregistrer</button>
                        </div>
                        <br>
                    </form>

            </div>

        </div>    
    </div>    
 </div> 
@endsection
