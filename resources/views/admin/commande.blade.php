<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN | AJOUTER UN PRODUIT</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
 <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
 <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
 <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
 <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&family=Source+Code+Pro:ital@1&display=swap" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,400i,600,700' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Source+Code+Pro:ital@1&display=swap" rel="stylesheet">
  <!-- Css -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
  <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('css/sliders.css')}}" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <!-- CSS only -->

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <main class="main-wrapper">

    <header class="nav-type-1">
      <!-- Fullscreen search -->
      <div class="search-wrap">
        <div class="search-inner">
          <div class="search-cell">
            <form method="get">
              <div class="search-field-holder">
                <input type="search" class="form-control main-search-input" placeholder="Search for">
                <i class="ui-close search-close" id="search-close"></i>
              </div>            
            </form>
          </div>
        </div>        
      </div> <!-- end fullscreen search -->

     
      
      <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
          <div class="container relative">

            <div class="row flex-parent">

              <div class="navbar-header flex-child">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                    <a href="">
                      <img class="logo-dark" style="margin-left: 460%" src="{{asset('img/ANM.png')}}" alt="logo">
                    </a>
                  </div>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Mobile cart -->
                <div class="nav-cart mobile-cart hidden-lg hidden-md">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      <a href="#" class="nav-cart-icon">
                        <span class="nav-cart-badge">2</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div> <!-- end navbar-header -->

             

              
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>

    <div class="content-wrapper oh">

        <section>
            <!-- Tabs -->
            <div class="text-center">
             <div class="tabs product-tabs">
             
               <ul class="nav nav-tabs">                                
                 <li style="margin-top: 22px;" class="active">
                   <a href="#featured" data-toggle="tab">TABLEAU DES COMMANDES :</a>
                 </li>                                
                
             
             </div>
           </div>
         </section>  
        <section>
            <table class="table table-striped"> 
                <thead> 
                <tr>
                     <th scope="col">NOM</th>
                     <th scope="col">PRENOM</th>
                     <th scope="col">EMAIL</th>
                     <th scope="col">TELEPHONE</th>
                     <th scope="col">VILLE</th>
                     <th scope="col">ADRESSE</th>
                     <th scope="col">Model</th>
                     <th scope="col">Taille</th>
                     <th scope="col">Etat</th>
                     <th scope="col">DATE</th>
                  
                </tr>
                </thead> 
                <tbody>
                  @foreach ($commande as $commande)
 
                    <tr> 
                    
                      <th scope="row">{{$commande->nomclient}}</th>
                      <th scope="row">{{$commande->prenomclient}}</th>
                      <th scope="row">{{$commande->emailclient}}</th>
                      <th scope="row">{{$commande->telephoneclient}}</th>
                      <th scope="row">{{$commande->villeclient}}</th>
                      <th scope="row">{{$commande->adresseclient}}</th>
                      <th scope="row">{{$commande->produit->Model}}</th>
                      <th scope="row">{{$commande->produit->Taille}}</th>
                      <th scope="row">{{$commande->produit->Etat}}</th>
                      <th scope="row">{{$commande->created_at}}</th>
                  
                        
                          @endforeach
                          
                     </tr>
                         </tbody> 
                </table>
        </section>
        <style>
            #btn{
                width: 100px;
                height: 30px;
            }
        </style>
         
      <!-- Footer Type-1 -->
     
      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
  </main> <!-- end main wrapper -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>  
  <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
    
</body>
</html>