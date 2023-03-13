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

  

    <div class="content-wrapper oh">

        <section>
            <!-- Tabs -->
            <div class="text-center">
             <div class="tabs product-tabs">
             
               <ul class="nav nav-tabs">                                
                 <li style="margin-top: 22px;" class="active">
                   <a href="#featured" data-toggle="tab">TABLEAU DES PRODUITS (STOCK) </a>
                 </li>                                
                
             
             </div>
           </div>
         </section>  
        <section>
          <a href="{{url('admin/ajouter')}}">
            <button style="background-color: blue;    margin-bottom: 1%;" class="btn" href="">Ajouter un produit</button>

          </a>
            <table class="table table-striped"> 
                <thead> 
                <tr>
                     <th scope="col">ID</th>
                     <th scope="col">IMAGE</th>
                     <th scope="col">MODEL</th>
                     <th scope="col">ETAT</th>
                     <th scope="col">TAILLE</th>
                     <th scope="col">DESCRIPTION</th>
                     <th scope="col">PRIX</th>
                     <th scope="col">ACTION</th>
                     
                </tr>
                </thead> 
                <tbody>
                  @foreach ($produits as $produit)
 
                    <tr> 
                    
                      <th scope="row">{{$produit->id}}</th>
                      
                      <th scope="row"><img  width="100px"  src="{{asset('/storage/uploads/'.$produit->Image)}}" /></th>
                      <th scope="row">{{$produit->Model}}</th>
                      <th scope="row">{{$produit->Etat}}</th>
                      <th scope="row">{{$produit->Taille}}</th>
                      <th scope="row">{{$produit->Description}}</th>
                      <th scope="row">{{$produit->Prix}}</th>
                      <th style="display: flex" scope="row">
                      <form action="{{url('admin/'.$produit->id)}}" method="post">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button style="background-color: red; border-radius: 30px; margin-left:-4%" type="button" class="btn delete ">Supprimer</button>
                      </form>
                      <a href="{{ url('admin/'.$produit->id.'/edite') }}">
                        <button style="background-color: green; border-radius: 30px; " class="btn ">Edit</button>
                      </a>
            </th>
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
         
     

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>  
  <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
     
$( ".delete" ).click(function(e) {
  Swal.fire({
  icon: 'error',
  title: 'Vous etes sur de supprimer ce produit ?',
 
    }).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    $(e.target).parent("form").submit();
  } 
})
});
</script>


</body>
</html>