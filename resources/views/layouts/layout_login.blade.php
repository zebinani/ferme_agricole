<!DOCTYPE html>
<html lang="en">

<head>
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />
  <link href="{{asset('css/all.css')}}" rel="stylesheet" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FERME AGRICOLE</title>

  <!-- Bootstrap core CSS -->
</head>

<body>

  <!-- Navigation -->
  <!-- <div id='titre'><h1>PLATE-FORME DE GESTION DE FERME</h1></div>-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/accueil">Accueil</a>
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        
          
          </li>
            </li>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div id="container">  @yield("login_page")</div>
  
  <div id="container">  @yield("Admin_create")</div>

  
  
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
