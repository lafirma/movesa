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

      <!-- Custom CSS -->
      <link href="{{ url("css/landing.css") }}" rel="stylesheet">
      <link href="{{ url('css/bootstrapValidator.min.css') }}" rel="stylesheet"

      <!-- Custom Fonts -->
      <link href="{{ url('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Play:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto" rel="stylesheet" type="text/css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

   </head>

   <body>

      <div class="wrapper">

         <div class="main cs-main" id="main">
            <section class="split-home">
               <section class="left-section wow fadeIn">

               </section>
               <section class="right-section">

                  <div class="hero-section">
                     <div class="hero-content text-center">
                        <div class="app-img">
                           <img class="wow" src="{{ url('img/logo.png') }}" alt="MOVESA">
                        </div>
                        <div class="app-info wow" style="visibility: visible; animation-name: fadeInUp;">
                           <h1 class="wow">Economica y Poderosa</h1>
                           <h4>Registrate y obten un cupon con el que podras acceder a un descuento<br class="hidden-xs">
                              de Lps. 2,500.00, casco y matricula gratis al comprar nuestro modelo ZM150.</h4>
                           <div class="container-fluid text-left">
                              <div class="row">
                                 <div class="col-md-10 col-md-offset-1">
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
                                                <input type="text" name="email" id="email" class="form-control" placeholder="Correo electronico">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label class="control-label" for="phone">Tel&eacute;fono</label>
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono celular">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="text-right ">
                                                <button type="submit" class="btn btn-danger">ENVIAR</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </section>


         </div><!-- Main Section -->
      </div>      

      <!-- jQuery -->
      <script src="{{ url('js/jquery.js') }}"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="{{ url('js/bootstrap.min.js') }}"></script>
      <script src="{{ url('js/bootstrapValidator.min.js') }}"></script>
      <script src="{{ url('js/landing.js') }}"></script>

   </body>

</html>
