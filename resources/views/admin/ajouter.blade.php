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

    {{-- <header class="nav-type-1">
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
            <ul class="top-bar-currency-language">
              <li>
                Currency: <a href="#">USD<i class="fa fa-angle-down"></i></a>
                <div class="currency-dropdown">
                  <ul>
                    <li><a href="#">USD</a></li>
                    <li><a href="#">EUR</a></li>
                  </ul>
                </div>
              </li>
              <li class="language">
                Language: <a href="#">ENG<i class="fa fa-angle-down"></i></a>
                <div class="language-dropdown">
                  <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Spanish</a></li>
                    <li><a href="#">German</a></li>
                    <li><a href="#">Chinese</a></li>
                  </ul>
                </div>
              </li>
            </ul>

            <ul class="top-bar-acc">
              <li class="top-bar-link"><a href="#">My Wishlist</a></li>
              <li class="top-bar-link"><a href="#">Newsletter</a></li>
              <li class="top-bar-link"><a href="#">Login</a></li>                 
            </ul>

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
                    <a href="index.html">
                      <img class="logo-dark" src="{{asset('img/ANM.png')}}" alt="logo">
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

              <div class="nav-wrap flex-child">
                <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                  
                  <ul class="nav navbar-nav">

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

                  </ul> <!-- end menu -->
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
                          0
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
                          <div class="nav-cart-title">
                            <a href="#">
                              Ladies Bag
                            </a>
                            <div class="nav-cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                          </div>
                          <div class="nav-cart-remove">
                            <a href="#" class="remove"><i class="ui-close"></i></a>
                          </div>
                        </div>

                        <div class="nav-cart-item clearfix">
                          <div class="nav-cart-img">
                            <a href="#">
                              <img src="img/shop/shop_item_2.jpg" alt="">
                            </a>
                          </div>
                          <div class="nav-cart-title">
                            <a href="#">
                              Sequin Suit longer title
                            </a>
                            <div class="nav-cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                          </div>
                          <div class="nav-cart-remove">
                            <a href="#" class="remove"><i class="ui-close"></i></a>
                          </div>
                        </div>

                      </div> <!-- end cart items -->

                      <div class="nav-cart-summary">
                        <span>Cart Subtotal</span>
                        <span class="total-price">$1799.00</span>
                      </div>

                      <div class="nav-cart-actions mt-20">
                        <a href="shop-cart.html" class="btn btn-md btn-dark"><span>View Cart</span></a>
                        <a href="shop-checkout.html" class="btn btn-md btn-color mt-10"><span>Proceed to Checkout</span></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header> --}}

    <div class="content-wrapper oh">

        <section>
            <!-- Tabs -->
            <div class="text-center">
             <div class="tabs product-tabs">
             
               <ul class="nav nav-tabs">                                
                 <li style="margin-top: 22px;" class="active">
                   <a href="#featured" data-toggle="tab">AJOUTER UN NOUVEAU TELEPHONE </a>
                 </li>                                
                
             
             </div>
           </div>
         </section>  
         <section class="newsletter" id="subscribe">
            <style>
                .containerr{
width: 100%;
background-color: #fff;
padding: 25px 30px;
border-radius: 5px;
box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.containerr .title{
font-size: 25px;
font-weight: 500;
position: relative;
}
.containerr .title::before{
content: "";
position: absolute;
left: 0;
bottom: 0;
height: 3px;
width: 30px;
border-radius: 5px;
background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
display: flex;
flex-wrap: wrap;
justify-content: space-between;
margin: 20px 0 12px 0;
}
form .user-details .input-box{
margin-bottom: 15px;
width: calc(100% / 2 - 20px);
}
form .input-box span.details{
display: block;
font-weight: 500;
margin-bottom: 5px;
}
.user-details .input-box input{
height: 45px;
width: 100%;
outline: none;
font-size: 16px;
border-radius: 5px;
padding-left: 15px;
border: 1px solid #ccc;
border-bottom-width: 2px;
transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
border-color: #9b59b6;
}
form .gender-details .gender-title{
font-size: 20px;
font-weight: 500;
}
form .category{
display: flex;
width: 140%;
margin: 14px 0 ;
justify-content: space-between;
}
form .category label{
display: flex;
align-items: center;
cursor: pointer;
}
form .category label .dot{
height: 18px;
width: 18px;
border-radius: 50%;
margin-right: 10px;
background: #d9d9d9;
border: 5px solid transparent;
transition: all 0.3s ease;
}
#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
background: #9b59b6;
border-color: #d9d9d9;
}
form input[type="radio"]{
display: none;
}
form .button{
height: 45px;
margin: 35px 0
}
form .button input{
height: 100%;
width: 100%;
border-radius: 5px;
border: none;
color: #fff;
font-size: 18px;
font-weight: 500;
letter-spacing: 1px;
cursor: pointer;
transition: all 0.3s ease;
background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
form .button input:hover{
/* transform: scale(0.99); */
background: linear-gradient(-135deg, #71b7e6, #9b59b6);
}
@media(max-width: 584px){
.container{
max-width: 100%;
}
form .user-details .input-box{
margin-bottom: 15px;
width: 100%;
}
form .category{
width: 100%;
}
.content form .user-details{
max-height: 300px;
overflow-y: scroll;
}
.user-details::-webkit-scrollbar{
width: 5px;
}
}
@media(max-width: 459px){
.container .content .category{
flex-direction: column;
}
}
            </style>
<div class="container">   
<div class="containerr">
<div class="title">REMPLIR LE FORMULAIRE</div>
<div class="content">
  <form action="{{url('/admin/ajouter')}}" method="POST" enctype="multipart/form-data">
    @csrf     <div class="content">
      <div class="user-details">
        <div class="input-box">
      <b>  <span class="details"> <b>MODEL</b> </span></b>   
  <select name="Model" id="">
    <option value="">..</option>
    <option value="IPHONE 13">IPHONE 13</option>
    <option value="IPHONE 12">IPHONE 12</option>
    <option value="IPHONE 12 PRO MAX">IPHONE 12 PRO MAX</option>
    <option value="IPHONE 11">IPHONE 11</option>
    <option value="IPHONE 11 PRO MAX">IPHONE 11 PRO MAX</option>
    <option value="IPHONE X">IPHONE X</option>
    <option value="IPHONE XR">IPHONE XR</option>
    <option value="IPHONE X MAX">IPHONE X MAX</option>
    <option value="IPHONE 8">IPHONE 8 </option>
    <option value="IPHONE 8 PLUS">IPHONE 8 PLUS</option>
    <option value="IPHONE 7">IPHONE 7 </option>
    <option value="IPHONE 7 PLUS">IPHONE 7 PLUS </option>
    <option value="IPHONE 6">IPHONE 6 </option>
    <option value="IPHONE 6 PLUS">IPHONE 6 PLUS </option>
   
  </select>      
  </div>
  <div class="input-box">
    <b><span class="details"> <b>TAILLE</b> </span> </b>
  <select name="Taille" id="">
  <option value="..">..</option>
  <option value="64">64</option>
  <option value="128">128</option>
  <option value="256">256</option>
  </select>      
  </div>
  <div class="input-box">
   <b><span class="details"><b> ETAT </b></span></b> 
  <select name="Etat" id="">
  <option value="">..</option>
  <option value="NEUF">NEUF</option>
  <option value="COMME NEUF">COMME NEUF</option>
  <option value="BON">BON</option>
  </select>    
  </div>
  
      </div>
    <div class="user-details">
     
      <div class="input-box">
        <span class="details">DESCRIPTION</span>
        <textarea type="text" name="description" placeholder="Enter your username" required>
        </textarea>
      </div>
      <div class="input-box">
        <span class="details">PRIX</span>
        <input type="text" name="Prix" placeholder="Enter prix" required>
      </div>
      <div class="input-box">
        <span class="details">Images</span>
        <input type="file" name="Image"  required>
      </div>
     
    </div>
   
    <div class="button">
      <input type="submit" value="Envoyer">
    </div>
  </form>
</div>
</div>



</div>
</div>
</section>
         
      <!-- Footer Type-1 -->
      {{-- <footer class="footer footer-type-1">
        <div class="container">
          <div class="footer-widgets">
            <div class="row">

              <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="widget footer-about-us">
                  <img src="{{asset('img/logo_dark.png')}}" alt="" class="logo">
                  <p class="mb-30">Zenna Shop is a very slick and clean eCommerce template.</p>
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
                  <h5 class="widget-title bottom-line left-align grey">Account</h5>
                  <ul class="list-no-dividers">                  
                    <li><a href="#">My account</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Order history</a></li>
                    <li><a href="#">Specials</a></li>
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
                  &copy; 2021  by A-N-M
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
      </footer> <!-- end footer --> --}}

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