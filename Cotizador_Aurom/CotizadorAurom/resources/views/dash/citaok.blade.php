<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cita agendada</title>
    <link rel="icon" href="{{asset('/imagenes/icono.png')}}">
     <!-- Custom styles for this template-->
     <link href="{{asset('/dash/css/sb-admin-2.min.css')}}" rel="stylesheet">
     <link href="{{asset('/dash/css/estilos.css')}}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                        <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <a class="navbar" href="index.php"><img src="{{asset('/imagenes/aurom.jpg')}}" height="350px" width="230" alt="" class="img-fluid center-block"/></a>

                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contenido cita -->
    <div class="container">
        <div class="alert alert-success" >
            ¡Listo, se ha agendado tu cita!
        </div>
            <a type="button" href="https://aurom.mx/" class="btn btn-outline-success">Continuar </a>
    </div>
    <!-- Footer -->
    <footer class="text-center text-white fixed-bottom" style="background-color: #c00000;">
        <div class="container p-4"></div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://aurom.mx/">AUROM</a>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/dash/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('dash/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/dash/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('/dash/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('/dash/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('/dash/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('/dash/js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{asset('/dash/js/demo/modal.js')}}"></script>
    
    <!-- Script font awesome-->
    <script src="https://kit.fontawesome.com/bf146cd1f6.js" crossorigin="anonymous"></script>
</body>
</html>