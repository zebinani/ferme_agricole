@extends("layouts.layout")
@section("sect_accueil")
  <div class="row-10 ">
    <div class="col">
      <header>
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1545300329-e785e923ed45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h1>FERME-AGRICOLE</h1>
              <p>Nos champs de prduction de fruit</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1486328228599-85db4443971f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h1>FERME-AGRICOLE</h1>
              <p>Nos champs de prduction de legume </p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1505872342847-6dbb5e76cd31?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80/1900x1080')">
          
            <div class="carousel-caption d-none d-md-block">
            <h1>PRODUITS</h1>
              <p>Nos produits delicieux.</p>
            </div>
          </div>
          </div>
        
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
      </header>
     
           <!-- Marketing Icons Section -->
  <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">A PROPOS</h4>
            <div class="card-body">
              <p class="card-text">Notre groupement agricole a ete concu a l'origine pour permettre a l'excerce en commun de l'agriculture.</p>
            </div>
            <div class="card-footer">
              <a href="/accueil" class="btn btn-primary">suite</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <h4 class="card-header">A LA UNE</h4>
              <div class="card-body">
                <p class="card-text"> <span>Nous recrutons 150  saisonniers pour la recolte du mois de janviers . </span></p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">suite</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <h4 class="card-header">COMMUNIQUE</h4>
              <div class="card-body">
                <p class="card-text">Nous informons a nos partenaire que nous disposons des produits agricole de tres bonne qualite  avec des prix tres abordables .</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">suite</a>
              </div>
            </div>
          </div>
  </div>
          <!-- Portfolio Section -->
  
    <h2><a class="navbar-brand" href="/show">Boutique</a></h2>

    
      <!-- /.row  <div class="test1">--> 
 
    <div class="row">
      <div class="col-lg-4 col-sm-4 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{asset('images/fruit1.jpeg')}}" alt=""></a>
            <div class="card-body">
            <h3 class="card-title ">
           <!--  <button type="button" class="btn btn-outline-success">   <a href="Command/create ">COMMANDER</a> 
            </button>
            -->
              </h3>
              <p class="card-text">la fraicheur le gout et la qualite d'une agriculture raisonnee </p>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset('images/champs.jpg')}}" alt=""></a>
            <div class="card-body">
            <h3 class="card-title ">
           <!--    <button type="button" class="btn btn-outline-success">
              <a href="Command/create ">COMMANDER</a> 
              
                </button>
                -->
              </h3>
              <p class="card-text">Nos legumes sont de tres bonne qualite avec une culture naturel.Nous utilisons moyen d'engrais dans nos  productions </div>
          </div>
        </div>
      <div class="col-lg-4 col-sm-4 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset('images/tomate.jpg')}}" alt=""></a>
            <div class="card-body">
              <h3 class="card-title ">
             <!--  <button type="button" class="btn btn-outline-success">
              <a href="Command/create ">COMMANDER</a> 
                </button>
                -->
              </h3>
              <p class="card-text"> nous disposons de tomate frais de tres bonne qualite.le 1kilogramme a 200 Franc fc
              </p>
            </div>
          </div>
        </div>
       </div>
       
     
        <h2>Nos champs</h2> 
  <div class="row">
      <div class="col-lg-4 col-sm-4 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{asset('images/10.jpg')}}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Champs de fruit</a>
            </h4>
            <p class="card-text">Comme la plupart des arbres fruitiers, le pommier est greffé. Ce greffage permet de raccourcir le délai entre la plantation et la première récolte, mais aussi de maintenir naturellement les arbres à une hauteur acceptable pour le travail quotidien de l’arboriculteur.De la fleur à la récolte il faudra attendre 160 jours en moyenne pour que le goût et les arômes s'expriment à leur optimum.Il existe toujours au monde des centaines de variétés différentes, certaines sont caractéristiques de votre région, vous les trouverez souvent chez Chapeau de paille. Pour les reconnaître, la couleur de jaune à rouge brique en passant par un vert explosif, le grain de la peau de lisse à rugueux, la forme de plate à tronconique en passant par la rondeur, seront les meilleurs guides. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{asset('images/2.jpg')}}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Nos Pepinieres</a>
            </h4>
            <p class="card-text">  Voici comment nous soignons nos pepiniere pour qu'elles donnent le meilleur d'elle-même.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{asset('images/champs6.jpeg')}}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Cueillette</a>
            </h4>
            <p class="card-text">Du printemps à l'automne, le verger nous régale de ses fruits. La cueillette, c'est tout un art : un peu de matériel, mais surtout le choix du bon moment, avec une météo clémente et une lune ascendante... Et comme chaque fruit a sa période de cueillette .</p>
          </div>
        </div>
      </div>
  </div>
  
</div>

@endsection