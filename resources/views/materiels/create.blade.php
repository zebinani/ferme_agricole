@extends("layouts.layout")
@section("sect_create_mat")
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-8">
                
                <div><h1>{{__('Enregistrement d\'un Materiel')}}</h1></div>

                    <form action="{{route('Materiel.store')}}" method="post">
                        @csrf
                        <div>
                            <input type="text" name="name" class="form-control"  required placeholder="nom">
                        </div>
                        <br>
                        
                        <div>
                            <input type="text" name="amortissement" class="form-control"required placeholder="amortissement">
                        </div>
                        <br>
                        
                        <div>
                        <textarea class="description" name="description"  placeholder="description"></textarea>
                            
                        </div>
                        <br>
                        
                        <div>
                            <button class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
        </div>
    </div>
        </div>

        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
   tinymce.init({
       selector:'textarea.description',
       width: 900,
       height: 300,
   });
@endsection