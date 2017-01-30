<!DOCTYPE html>
<html lang="en">

   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>MOVESA</title>

      <!-- Bootstrap Core CSS -->
      <link href="{{ url("css/bootstrap.min.css") }}" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="{{ url("css/thanks.css") }}" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="{{ url('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
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
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <img src="{{ url("img/logob.png") }}">
               </div><!-- .col-md-6 -->
            </div><!-- .row -->
            <div class="row">
               <div class="col-md-12 text-center">
                  <p> Gracias {{ $name }} por registrarte con nosotros. Tu cupon es {{ $coupon }}.</p>
                  <p>Presentalo en cualquiera de nuestras tiendas al adquirir tu motocicleta modelo ZM150 
                     y accede a nuestra promocion</p>
                  <a href="{{ route('landing') }}" class="btn btn-danger">Regresar</a>
               </div>
            </div>
         </div><!-- .container -->
      </div>
   </body>

</html>
