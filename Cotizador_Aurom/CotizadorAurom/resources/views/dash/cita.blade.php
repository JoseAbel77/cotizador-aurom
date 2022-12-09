<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar cita</title>
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
    
    <!-- Formulario cita -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-group" class="col-6" method="POST" action="/cita" class="center">
                        @csrf
                        <fieldset>
                            <legend class="text-center header">Agenda tu cita</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user"></i></span>
                                <div class="col-md-8">
                                    <input class="form-control" type="hidden" name="timezone" id="timezone">
                                    <input class="form-control" type="text" required placeholder="Nombre" name="Nombre">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o"></i></span>
                                <div class="col-md-8">
                                    <input class="form-control" type="email" required placeholder="Correo" name="Correo">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-duotone fa-calendar-days"></i></span>
                                <div class="col-md-8">
                                    <input class="form-control" type="date" required placeholder="Fecha" name="Fecha" id="Fecha" min ="<?php echo date("Y-m-d",strtotime(date("Y-m-d")));?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-solid fa-clock"></i></span>
                                <div class="col-md-8">
                                    <input class="form-control" type="time" required placeholder="Hora" name="Hora">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-outline-danger" type="submit" >Agendar cita</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
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
    

    <!--ZONA HORARIA-->
    <script>
        $(document).ready(function(){
            $("#timezone").val(Intl.DateTimeFormat().resolvedOptions().timeZone)
        });
    </script>
    <!-- Script font awesome-->
    <script src="https://kit.fontawesome.com/bf146cd1f6.js" crossorigin="anonymous"></script>
</body>
</html>