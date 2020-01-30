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
                    <input list="product" name="article" class="form-control" required>
                        <datalist id="product">
                            <option value="orange">
                            <option value="Banane">
                            <option value="mangue">
                            <option value="legume">
                            <option value="carotte"> 
                        </datalist>

                    </div>
                    <div class="row-4">
                    <div><label for="text">REFERENCE</label><div>
                    <input list="reference" name="" class="form-control" required>
                        <datalist id="reference">
                            <option value="FRUIT">
                            <option value="LEGUME">
                            <option value="CEREALE">
                            <option value="legume">
                            
                        </datalist>
                        
                    </div>
                    
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


      