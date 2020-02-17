<!DOCTYPE html>
<html lang="fr">
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
   
        <header>
            
              <div class="container">
                  <div class="row  fixed-top text-align-center">
                    <div class="col-sm-12 bg-success">
                      <div class="entete"><strong>  PLATE-FORME DE GESTION DE FERME AGRICOLE </strong>  </div>
                
                    </div>
                  </div>
              </div>
        </header>
 
  <main>
 
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        
          <div class="container">
          <a class="navbar-brand" href="/accueil">Accueil</a></button>
          <a class="navbar-brand" href="/Command/create">Commander</a></button>
          <a class="navbar-brand" href="/show">Boutique</a>
          <a class="navbar-brand" href="/Contact/create">Contact</a></button>

          <a class="navbar-brand" href="#">Panier <span classe="badge badge-pill badge-dark"> {{Cart::count()}}</span> </a>
          
      
      
      
      

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
                
                
                </a>
        
            @can('Admin')
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menu
                </a>
              
              <div class="dropdown-menu dropdown-menu-right"     aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item" href="/Employ">Personnels</a>
                  
                  <a class="dropdown-item" href="/Production">Production</a>
                  <a class="dropdown-item" href="/Materiel">Materiels</a>
                  <a class="dropdown-item" href="/Command">Commandes</a>
                  <a class="dropdown-item" href="/Ventes">Ventes</a>
                  <a class="dropdown-item" href="/Parcel">Parcelles</a>
                  <a class="dropdown-item" href="/Client">Clients</a>
                  <a class="dropdown-item" href="/Product">Produits</a>
                  <a class="dropdown-item" href="/Department">Departments</a>
                  <a class="dropdown-item" href="/User">Utilisateur</a>
                  <a class="dropdown-item" href="/Contact">contacts</a>
                  
                </div>
          
              </li>  
            @endcan
            
            @can('User')
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menu
                </a>
              
              <div class="dropdown-menu dropdown-menu-right"     aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item" href="/Employ">Personnels</a>
                  <a class="dropdown-item" href="/Product">Produits</a>
                  <a class="dropdown-item" href="/Production">Production</a>
                  <a class="dropdown-item" href="/Materiel">Materiels</a>
                  <a class="dropdown-item" href="/Command">Commandes</a>
                  
                  
                </div>
          
              </li>  
            @endcan

            
          <!-- pour faire du backend -->
               @guest
                            
                            <li class="nav-item">
                            
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    
                                <button type="button" class="btn btn-outline-success btn-sm"> <a class="nav-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>  </button>     
                         
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
              </li>
              </li>
              <li><a  href="#">Panier <span classe="badge badge-pill badge-black"> {{Cart::count()}}</span> </li>
          </ul>
      </div>
     </div>
    </nav>


    <main>
         <!-- la page de connexion-->
      <div id="container">
  
        <div id="container"> @yield("create_product ") </div> 
        
        <div id="container"> @yield("create_parcel ") </div> 
        <div id="container"> @yield("edit_parcel ") </div> 
        <div id="container"> @yield("index_parcel ") </div>

        <div id="container"> @yield("listecontact") </div>

         

               <div id="container">@yield("create_employ") </div> 
  
               <div id="container">@yield("sect_layout")</div> 
               <div id="container">@yield("User_Afficher")</div> 
                

              <div id="container">
                
              @yield("sect_accueil")

              </div> 
              <div id="container">
                
                @yield("page_show")
  
                </div> 
              <div id="container">
                
              @yield("sect_contact")

              </div> 
              <div id="container">
                
              @yield("EMP_section")

              </div> 
              <div id="container">
              
              @yield("index_production")
              </div>
              <div id="container">
              
              @yield("section_occupation")

              </div>

              <div id="container">@yield("Product_create")</div>
              <div id="container">@yield("Product_index")</div>
              <div id="container">@yield("Product_edit")</div>
              
              <div id="container">@yield("Employ_create")</div>

               <div id="container">@yield("sect_Em_edit")</div>
              
              
              <div id="container"> @yield("sect_materiel") </div>
              
             
              <div id="container"> @yield("sect_edit_mat")</div>
              
             
              <div id="container"> @yield("sect_create_mat")</div>
              <div id="container">@yield("create_materiel")</div>

              <div id="container">@yield("Com_index")</div>
              <div id="container">@yield("Com_create")</div>
              <div id="container">@yield("Com_edit")</div>
              
              <div id="container">@yield("parcel_index")</div>
              <div id="container">@yield("parcel_create")</div>
              <div id="container">@yield("parcel_edit")</div>

               
               <div id="container">@yield("validation")</div> 
               <div id="container">@yield("login")</div> 
               <div id="container">@yield("verication")</div> 
             
               
               

               <div id="container">@yield("client_index")</div> 
               <div id="container">@yield("client_create")</div> 
               <div id="container">@yield("client_edit")</div> 

               <div id="container">  @yield("DEP_create")</div>
               <div id="container">  @yield("DEP_index")</div>

               <div id="container">  @yield("role_page")</div>

               <div id="container">  @yield("parcel_index")</div>
               <div id="container">  @yield("parcel_create")</div>
               <div id="container">  @yield("parcel_edit")</div>


               <div id="container">  @yield("Admin.edit")</div>

               <div id="container">  @yield("Prod_creation")</div>
               <div id="container">  @yield("Prod_index")</div>
          </div> 

       </main>

        <footer class="py-2 bg-dark ">
            <div class="container ">
            <div class="row-12 ">
              <p class="m-0 text-center   text-white">Copyright 2020 &copy; TOUS LES DROITS SONT RESERVES BINANITECH</p>
            </div>
            <!-- /.container -->
        </footer>

              <!-- Bootstrap core JavaScript -->
              <script src="{{asset('js/app.js')}}"></script>
              <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
              <script>
                tinymce.init({
                    selector:'textarea.description',
                    width: 900,
                    height: 300,
                });
              </script>

  </body>

</html>
