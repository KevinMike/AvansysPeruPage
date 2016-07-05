<!DOCTYPE html>
<html lang="en">
<head>
    <!-- JQUERY-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery-ui-1.11.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="js/jquery-ui-1.11.3/jquery-ui.css">
    <!-- FIN JQUERY -->

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FIN BOOTSTRAP -->
</head>
<body>
    <div class="container">
           <div class="row">
                   <div class="col col-md-6 col-md-offset-3"   >
                           <div class="panel panel-default">
                                 <div class="panel-heading"><h3 class="panel-title">ENHORABUENA!!!</h3></div>
                                 <div class="panel-body">
                                       <h4>Tu mensaje ha sido enviado, pronto responderemos a tu solicitud.</h4>
                                     </div>
                                 <div class="panel-footer">
                                         <a href="{{ route('contact') }}" class="btn btn-primary btn-xs">Volver</a>
                                       </div>
                               </div>
                        </div>
               </div>
    </div>
</body>
</html>
