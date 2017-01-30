<!DOCTYPE html>
<html lang="en">

   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>MOVESA Landing Page</title>

      <!-- Bootstrap Core CSS -->
      <link href="{{ url("css/bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ url  ("css/owl.carousel.min.css") }}" rel="stylesheet">
      <link href="{{ asset("css/owl.theme.default.min.css") }}" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="{{ url("css/stylish-portfolio.css") }}" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="{{ url('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

   </head>

   <body>

      <!-- Navigation -->
      <header id="masthead" role="banner">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <img src="{{ url("img/logo.png") }}">
               </div><!-- .col-md-6 -->
               <div class="col-md-6">
                  <nav id="site-navigation" class="main-navigation navigation-right" role="navigation">
                     <div class="menu-container">
                        <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                           <li class="menu-item current-menu-item"><a href="#home">Inicio</a></li>
                           <li class="menu-item"><a href="#">Quienes Somos</a></li>
                           <li class="menu-item"><a href="#">Modelos</a></li>
                           <li class="menu-item"><a href="#">Talleres</a></li>
                           <li class="menu-item"><a href="#">Contacto</a></li>
                        </ul>
                     </div>
                  </nav><!-- #site-navigation -->
               </div><!-- .col-md-6 -->
            </div><!-- .row -->
         </div><!-- .container -->
      </header>

      <!-- Header -->
      <header id="top" class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="text-vertical-center">
                     <img src="{{ url('img/sample.png') }}">
                  </div>
               </div>
               <div class="col-md-7" >
                  <h1 class="wow">Economica y poderosa</h1>
                  <h3>PROMOCION DEL MES</h3>
                  <div>
                  <form action="{{ route('lead')}}" id="contactForm" method="POST"> 
                     {{ csrf_field() }}
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="control-label" for="name">Nombre</label>
                              <input type="text" name="name" id="name" class="form-control" 
                                     autofocus placeholder="Nombre Completo">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="control-label" for="email">Email</label>
                              <input type="text" name="email" id="email" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <label class="control-label" for="phone">Tel&eacute;fono</label>
                              <input type="text" name="phone" id="phone" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="text-right ">
                              <button type="submit" class="btn btn-primary">Guardar</button>
                           </div>
                        </div>
                     </div>
                  </form>
                     </div>
               </div>
            </div>
         </div>
      </header>
      

      <div id="owl-demo" class="owl-carousel owl-theme">
         <div class="item"><img src="assets/fullimage1.jpg" alt="The Last of us"></div>
         <div class="item"><img src="assets/fullimage2.jpg" alt="GTA V"></div>
         <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
         <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
         <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
         <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
         <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
      </div>

      <div id="service" class="service content-section bg-white">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title">
                     <h2>Service</h2>
                  </div>
               </div><!-- .col-md-12 -->
            </div><!-- .row -->
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="service-item">
                     <div class="service-item-icon text-dark-skyblue">
                        <span class="fa fa-cogs"></span>
                     </div><!-- .service-item-icon -->
                     <h4 class="service-item-title">Funds Analitics</h4>
                     <p>Balancing a composition involves arranging both positive elements and negative space in such a way</p>
                  </div><!-- .service-item -->
               </div><!-- .col-## -->
               <div class="col-md-4 col-sm-6">
                  <div class="service-item">
                     <div class="service-item-icon text-dark-skyblue">
                        <span class="fa fa-check"></span>
                     </div><!-- .service-item-icon -->
                     <h4 class="service-item-title">Investment Planing</h4>
                     <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
                  </div><!-- .service-item -->
               </div><!-- .col-## -->
               <div class="col-md-4 col-sm-6">
                  <div class="service-item">
                     <div class="service-item-icon text-dark-skyblue">
                        <span class="fa fa-copyright"></span>
                     </div><!-- .service-item-icon -->
                     <h4 class="service-item-title">Tax Saving</h4>
                     <p>He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                  </div><!-- .service-item -->
               </div><!-- .col-## -->
               <div class="col-md-4 col-sm-6">
                  <div class="service-item">
                     <div class="service-item-icon text-dark-skyblue">
                        <span class="fa fa-tachometer"></span>
                     </div><!-- .service-item-icon -->
                     <h4 class="service-item-title">Support</h4>
                     <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>
                  </div><!-- .service-item -->
               </div><!-- .col-## -->
               <div class="col-md-4 col-sm-6">
                  <div class="service-item">
                     <div class="service-item-icon text-dark-skyblue">
                        <span class="fa fa-handshake-o"></span>
                     </div><!-- .service-item-icon -->
                     <h4 class="service-item-title">Business consulting</h4>
                     <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed</p>
                  </div><!-- .service-item -->
               </div><!-- .col-## -->
               <div class="col-md-4 col-sm-6">
                  <div class="service-item">
                     <div class="service-item-icon text-dark-skyblue">
                        <span class="fa fa-motorcycle"></span>
                     </div><!-- .service-item-icon -->
                     <h4 class="service-item-title">Marketing</h4>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                  </div><!-- .service-item -->
               </div><!-- .col-## -->
            </div><!-- .row -->
         </div><!-- container -->
      </div>

      <!-- Portfolio -->
      <section id="portfolio" class="portfolio">
         <div class="container">
            <div class="row">
               <div class="col-lg-10 col-lg-offset-1 text-center">
                  <h2>Our Work</h2>
                  <hr class="small">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="portfolio-item">
                           <a href="#">
                              <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="portfolio-item">
                           <a href="#">
                              <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="portfolio-item">
                           <a href="#">
                              <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="portfolio-item">
                           <a href="#">
                              <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- /.row (nested) -->
                  <a href="#" class="btn btn-dark">View More Items</a>
               </div>
               <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>

      <!-- Footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-10 col-lg-offset-1 text-center">
                  <h4><strong>MOVESA</strong>
                  </h4>
                  <p>1a. y 3a. Avenida, 16 calle<br>Bo. La Guardia, San Pedro Sula, Honduras</p>
                  <ul class="list-unstyled">
                     <li><i class="fa fa-phone fa-fw"></i>Tel. (504) 2557-7916</li>
                     <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">servicioalcliente@movesa.com</a>
                     </li>
                  </ul>
                  <br>
                  <ul class="list-inline">
                     <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-dribbble fa-fw fa-2x"></i></a>
                     </li>
                  </ul>
                  <hr class="small">
                  <p class="text-muted">Copyright &copy; MOVESA 2017</p>
               </div>
            </div>
         </div>
      </footer>

      <!-- jQuery -->
      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>

      <!-- Carousel -->
      <script src="js/owl.carousel.min.js"></script>   

      <!-- Custom Theme JavaScript -->
      <script>
// Closes the sidebar menu
$("#menu-close").click(function (e) {
   e.preventDefault();
   $("#sidebar-wrapper").toggleClass("active");
});

// Opens the sidebar menu
$("#menu-toggle").click(function (e) {
   e.preventDefault();
   $("#sidebar-wrapper").toggleClass("active");
});

// Scrolls to the selected menu item on the page
$(function () {
   $('a[href*=#]:not([href=#])').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

         var target = $(this.hash);
         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
         if (target.length) {
            $('html,body').animate({
               scrollTop: target.offset().top
            }, 1000);
            return false;
         }
      }
   });
});

$(document).ready(function () {

   $("#owl-demo").owlCarousel({
      navigation: true, // Show next and prev buttons
      slideSpeed: 300,
      autoplay: true,
      paginationSpeed: 500,
      items: 4,
      itemsDesktop: false,
      itemsDesktopSmall: false,
      itemsTablet: false,
      itemsMobile: false
   });
});

      </script>

   </body>

</html>
