@extends("layouts.layout")
@section("Employ_create")

            
        <div class="container">
        <div class="row-10">
       
            <div><h1>{{__('Enregistrement d\'un employer')}}</h1></div>
                <form action="{{route('Employ.store')}}" method="post">
                    @csrf
        
                    <div>
                        <input type="text" name="matricule" class="form-control"required autocomplete="email"  placeholder="MATRICULE">
                    </div>
                    <br><br>
                    <div>
                        <input type="text" name="nom" class="form-control"  required autocomplete="email" placeholder="NOM">
                    </div>
                    <br><br>
                    <div>
                        <input type="text" name="prenom" class="form-control" placeholder="PRENOM">
                    </div>
                    <br><br>
                    <div>    
                    <input  type="text" name="adresse" class="form-control "id="adresse"  required autocomplete="email" autofocus placeholder="Adresse">   
                    </div>
                    <br><br>
                    <div>
                        <input type="text" name="telephone" class="form-control" placeholder="TELEPHONE">
                    </div>
              <br><br>
                    <div>
                    <select name="Department_id" id="Department" class="form-control" required  placeholder="Departement">
                        <option value="" > </option>

                        @foreach($Departments as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                    
                    </div>
<br><br>
                    <div>
                    
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
     <br><br>
     </div>
        </div>
        
@endsection

