@extends('layouts.layout')
  @section("sect_Em_edit")
       <br>
    <div class="container">
        <form action="{{route('editer_employs',['id'=>$Employs->id])}}" method="post">
             @csrf
             @method('patch')          
          <div><input type="text" name="matricule" class="form-control"   placeholder="le nom du produit" value="{{$Employs->matricule}}"></div>
            <br>
          <div><input type="text" name="nom" class="form-control" placeholder="nom" value="{{$Employs->nom}}"> </div>
              <br>
          <div><input type="text" name="prenom" class="form-control" placeholder="prenom" value="{{$Employs->prenom}}"> </div>
              <br>
          <div><input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{$Employs->adresse}}"> </div>
                <br>
          <div><input type="text" name="telephone" class="form-control" placeholder="Telephone" value="{{$Employs->telephone}}"> </div>
               <br>
          <div><select type="text" name="Department_id" class="form-control" value="{{$Employs->Department_id}}" >

              @foreach ($Departments as $key => $value)
                @if ($value==$nomDep )
                <option value="{{ $key }}" selected > 
                    {{ $value }} 
                </option>
                @else
                <option value="{{ $key }}" > 
                    {{ $value }} 
                </option>
                @endif
              @endforeach 
              </select>
           </div>
            <br>
            
          <div> <button class="btn btn-primary">Enregistrer</button> </div>
        </form>
    </div>
      <br>
  @endsection