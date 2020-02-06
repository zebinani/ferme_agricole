@extends("layouts.layout")
@section("Com_create")
<div class="container ">
<div class="row 10 ">
    <div class="col-">
    <div><h1>{{__('Enregistrement d\'une commande')}}</h1></div>

    </div>
<div class="col-8 ">
    <br>
        <form action="{{route('Command.store')}}" method="post" autocomplete="on">
                    @csrf
                    <div class="row-4">
                    <div><label for="text">ARTICLE</label><div>
                    
                        <select id="product"name="article" class="form-control" required >
                        
                            
                            <option value="Banane">BANANE</option>
                            <option value="mangue">MANGUE</option>
                            <option value="legume">LEGUME</option>
                            <option value="carotte">CAROTTE</option> 
                            <option  value="orange" selected>ORANGE</option>
                        </select>

     
 
                        
                    </div>
                    <div class="row-4">
                    <div><label for="text">REFERENCE</label><div>
                        <select id="reference" name="reference" class="form-control" required>
                            <option value="FRUIT">FRUIT</option>
                            <option value="CEREALE">CEREALE</option>
                            <option value="LEGUME">LEGUME</option>
                            <option  value="#" selected>SELECTIONNER </option>
                        </select>
                        
                    </div>
                    <br>
                    <div class="row-4">
                    <div><label for="quantite">QUANTITE</label><div>
                        <input type="number" name="quantite" class="form-control" required>
                    </div>
                    <div class="row-4">
                    <div><label for="text">ADRESSE</label><div>
                        <input type="text" name="adresse" class="form-control" required >
                    </div>
                    <div class="row-4">
                    <div><label for="phone">TELEPHONE</label><div>
                        <input type="tel" name="phone" class="form-control" required >
                    </div>
                   
                    <br>
                    <div>
                    
                    <input type="reset" value="Effacer">
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                    <br>
                    <br>
                    
                </form>
                

</div>
</div>
</div>
      @endsection


      