<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zenna | VENTE</title>

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
  <link rel="shortcut icon" href="img/ANM.png">
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

      <!-- Top Bar -->
      <div class="top-bar hidden-xs">
        <div class="container">
          <div class="top-bar-links flex-parent">
         

           

          </div>
        </div>
      </div> <!-- end top bar -->
      
      <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
          <div class="container relative">

            <div class="row flex-parent">

              <div class="navbar-header flex-child">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                    <a href="/">
                      <img class="logo-dark" src="img/ANM.png" alt="logo">
                    </a>
                  </div>
                </div>
               
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

              <div class="nav-wrap flex-child">
                <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                  
                  {{-- <ul class="nav navbar-nav">

                    <li class="dropdown">
                      <a href="#">Home</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index-2.html">Home 2</a></li>
                        <li><a href="index-3.html">Home 3</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Pages</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="faq.html">F.A.Q</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Blog</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="blog-standard.html">Standard</a></li>
                        <li><a href="blog-single.html">Single Post</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Shop</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu megamenu-wide">
                        <li>
                          <div class="megamenu-wrap container">
                            <div class="row">

                      

                             

                            </div> 
                          </div>
                        </li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Elements</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="typography.html">Typography</a></li>
                      </ul>
                    </li> <!-- end elements -->

                  
                  
                    <!-- Mobile search -->
                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" class="mobile-search">
                        <input type="search" class="form-control" placeholder="Search...">
                        <button type="submit" class="search-button">
                          <i class="fa fa-search"></i>
                        </button>
                      </form>
                    </li>

                  </ul> <!-- end menu --> --}}
                </div> <!-- end collapse -->
              </div> <!-- end col -->

              <div class="flex-child flex-right nav-right hidden-sm hidden-xs">
                <ul>
                  
                  <li class="nav-search-wrap style-2 hidden-sm hidden-xs">
                    <a href="#" class="nav-search search-trigger">
                      <i class="fa fa-search"></i>
                    </a>
                  </li>
                  <li class="nav-cart">
                    <div class="nav-cart-outer">
                      <div class="nav-cart-inner">
                        <a href="#" class="nav-cart-icon">
                          
                        </a>
                      </div>
                    </div>
                    <div class="nav-cart-container">
                      <div class="nav-cart-items">

                        <div class="nav-cart-item clearfix">
                          <div class="nav-cart-img">
                            <a href="#">
                              <img src="img/shop/shop_item_1.jpg" alt="">
                            </a>
                          </div>
                        
                          <div class="nav-cart-remove">
                            <a href="#" class="remove"><i class="ui-close"></i></a>
                          </div>
                        </div>

                      
                      </div> <!-- end cart items -->

                   

                      
                    </div>
                  </li>
                </ul>
              </div>
          
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
                   <a href="#featured" data-toggle="tab">ACHATEZ UN NOUVEAU TELEPHONE </a>
                 </li>                                
                
             
             </div>
           </div>
         </section>  
        <section>
            <div class="container">

            <div class="grid">
                <div class="grid-item">
                  <div class="card">
                    <img class="card-img" src="{{asset('/img/pic1.png')}}" alt="Rome" />
                    <div class="card-content">
                      <h1 class="card-header">Remplissez les informations</h1>
                      <p class="card-text">
                        Rome is known for its stunning <strong> architecture</strong>,
                        with the Colleseum, Pantheon, and Trevi Fountain as the main
                        attractions.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item">
                  <div class="card">
                    <img
                      class="card-img"
                      src="{{asset('/img/pic2.png')}}"
                      alt="Grand Canyon"
                    />
                    <div class="card-content">
                      <h1 class="card-header">L'envoie du telephone</h1>
                      <p class="card-text">
                        One of the world's natural wonders, the iconic Grand Canyon draws
                        oohs and aahs from visitors perched at the edge of its
                        <strong>towering cliffs</strong>.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item">
                  <div class="card">
                    <img class="card-img" src="{{asset('/img/pic3.png')}}" alt="Maldives" />
                    <div class="card-content">
                      <h1 class="card-header">Payer à la livraison </h1>
                      <p class="card-text">
                        The Maldives are known for their
                        <strong>natural environment</strong> including the blue ocean,
                        white beaches, and clean air, attracting tourists.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </section>
         <!-- Tabs/Slider Products -->
         <hr>
      <section class="section-wrap pt-0">
        <div class="container-fluid">

          <!-- Tabs -->
          <div class="text-center">
            <div class="tabs product-tabs">
            
              <ul class="nav nav-tabs">                                
                <li class="active">
                  <a href="#featured" data-toggle="tab">Collections</a>
                </li>                                
                                              
              </ul>
            
            </div>
          </div>


        <!-- Tab Content -->
        <div class="tab-content tabs-slider-content">

          <!-- Featured -->
          <div class="tab-pane fade in active" id="featured">

            <div id="owl-shop-items-slider-1" class="owl-carousel owl-theme">
              @foreach ($produits as $produit) 

              <div class="product">
                <div class="product-item hover-trigger">
                  <div class="product-img">
                    <a href="{{url('/single/'.$produit->id)}}">
                      <img src="{{asset('/storage/uploads/'.$produit->Image)}}" alt="">
                    </a>
                  
                    <div class="hover-2">                    
                      <div class="product-actions">
                        <a href="#" class="product-add-to-wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </div>                        
                    </div>
                    <a href="{{url('/single/'.$produit->id)}}" class="product-quickview">Acheter maintenant</a>
                  </div>
                  <div class="product-details">                      
                    <h3 class="product-title">
                      <a href=""">{{$produit->Model}}</a>
                    </h3>
                   
                  </div>
                  <span class="price">
                   
                    <ins>
                      <span class="amount">{{$produit->Prix}} <b>MAD</b> </span>
                    </ins>
                  </span>
                </div>
              </div>
              @endforeach

              

              

             

             

             

            </div> <!-- end slider -->

          </div> <!-- end featured -->

         

        


        </div>

        </div>
      </section> <!-- end tabs/slider products -->
         
      <!-- Footer Type-1 -->
      <footer class="footer footer-type-1">
        <div class="container">
          <div class="footer-widgets">
            <div class="row">

              <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="widget footer-about-us">
                  <img src="img/ANM.png" alt="" class="logo">
                  <div class="footer-socials">
                  
                  </div>
                </div>
              </div> <!-- end about us -->

              <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
                <div class="widget footer-links">
                  <h5 class="widget-title bottom-line left-align grey">Information</h5>
                  <ul class="list-no-dividers">
                    <li><a href="#">About us</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="widget footer-links">
                  <h5 class="widget-title bottom-line left-align grey">Pages</h5>
                  <ul class="list-no-dividers">                  
                    <li><a href="#">Acheter</a></li>
                    <li><a href="#">Vendre</a></li>
                 
                 
                  </ul>
                </div>
              </div>

            

              <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="widget footer-links">
                  <h5 class="widget-title bottom-line left-align grey">Service</h5>
                  <ul class="list-no-dividers">
                    <li><a href="#">Securité des données </a></li>
                    <li><a href="#">Livraison en temps</a></li>
                    <li><a href="#">Fiabilité</a></li>
                    <li><a href="#">Contact en ligne </a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>    
        </div> <!-- end container -->

        <div class="bottom-footer">
          <div class="container">
            <div class="row">

              <div class="col-sm-6 copyright sm-text-center">
                <span>
                  &copy; 2021  by A N M 
                </span>
              </div>

              <div class="col-sm-6 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
               
              </div>

            </div>
          </div>
        </div> <!-- end bottom footer -->
      </footer> <!-- end footer -->
      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
  </main> <!-- end main wrapper -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>  
  <script type="text/javascript" src="js/scripts.js"></script>
    
</body>
</html>