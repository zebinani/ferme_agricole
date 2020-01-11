@extends('layouts.layout')
@section('sect_contact')

<div class="container">
<br>
  <div class="row">
    <div class="col-12 sm-6 ">
   

<div class="row" id="contatti">
<div class="container mt-5" >

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.935630429474!2d-17.324286450222242!3d14.772655776748406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10aee2898fbcd%3A0xd89e68434b47cac!2sBINANITECH!5e0!3m2!1sfr!2ssn!4v1578613556086!5m2!1sfr!2ssn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold text-white">CONTACT</h2>
        <form action="{{route('Contact.store')}}" method="post">
        @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2"  name="name" placeholder="NOM" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" name="prenom" placeholder="PRENOM" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" name="email" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" class="form-control mt-2" name="number" placeholder="TELEPHONE" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Description" rows="6" required></textarea>
              </div>
            </div>
            <div class="col-12">
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label text-white" for="invalidCheck2">
                  Valider
                </label>
              </div>
            </div>
            </div>
            <div class="col-12">
              <button class="btn btn-light" type="submit">Envoyer</button>
            </div>
          </div>
        </form>
        <div class="text-white">
        <h2 class="text-uppercase mt-4 font-weight-bold">Nous sommes</h2>

        <i class="fas fa-phone mt-3"></i> <a href="tel:+">PORT:(+221) 77000000</a><br>
        <i class="fas fa-phone mt-3"></i> <a href="tel:+">FIX:(+221) 783123456</a><br>
        <i class="fa fa-envelope mt-3"></i> <a href="">EMAIL:masellouddiallo@gmail.com</a><br>
        <i class="fas fa-globe mt-3"></i>ADRESSE: Keur massar PAU 9<br>
        
        <div class="my-4">
        <a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
        <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
        </div>
        </div>
      </div>

    </div>
</div>
</div>
<!--
<div class="row text-center bg-success text-white" id="author">
  <div class="col-12 mt-4 h3 ">
  <a href="#">by P. Fattoruso</a>
</div>
         -->
<div class="col-12 my-2">
<!--    
<a ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.935630429474!2d-17.324286450222242!3d14.772655776748406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10aee2898fbcd%3A0xd89e68434b47cac!2sBINANITECH!5e0!3m2!1sfr!2ssn!4v1578613556086!5m2!1sfr!2ssn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></a>
-->
</div>

</div>
</div>
</div>
</div>




@endsection
