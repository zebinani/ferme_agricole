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
<div class="container">
<div class="container">
  <div class="row  fixed-top text-align-center">
    <div class="col-sm-12 bg-success">
      <div class="entete"><h5> PLATE-FORME DE GESTION DE FERME AGRICOLE</h5> </div>
 
    </div>
  </div>
</div>
</header>

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
            @guest
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    

                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>
                                    
                                   
                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                   
                                </div>
                            </li>                            
                        @endguest
            </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div id="container">  @yield("login")</div>
  
  <div id="container">  @yield("Admin_create")</div>
  <div id="container">  @yield("Admin_edit")</div>

  <div id="container">  @yield("reset")</div>
  <div id="container">  @yield("confirmer")</div>
  <div id="container">  @yield("verify")</div>
  <div id="container">  @yield("email")</div>
  <div id="container">  @yield("register")</div>


  
  
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
