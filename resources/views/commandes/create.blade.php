@extends("layouts.layout")
@section("Com_create")
<div class="container ">
<div class="row ">
<div class="col-8 ">
    <br>

       <div><h1>{{__('Enregistrement d\'une commande')}}</h1></div>

                <form action="{{route('Command.store')}}" method="post" autocomplete="on">
                    @csrf
                 
                    
                    
                    <div class="row-4">
                        <div><label for="Clients">Num_Client</label>
                        <div>
                        
                        <select name="client_id" id="Clients" class="form-control" required autocomplete="Cient_id" >
                        <option value=""></option>
                        @foreach($Clients as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                    
                    </div>
                    
                    <div class="row-6">
                    <div><label for="text">ARTICLE</label><div>
                        <input type="text" name="article" class="form-control" >
                    </div>
                    <div class="row-6">
                    <div><label for="reference">REFERENCE</label><div>
                        <input type="text" name="reference" class="form-control" >
                    </div>
                    <div class="row-6">
                    <div><label for="quantite">QUANTITE</label><div>
                        <input type="number" name="quantite" class="form-control">
                    </div>
                    <div class="row-6">
                    <div><label for="date">DATE</label>
                    <div>
                    <div>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <br>
                    <div>
                    
                    <input type="reset" value="Effacer">
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                    <br>
                    
                </form>
                

</div>
</div>
</div>
      @endsection