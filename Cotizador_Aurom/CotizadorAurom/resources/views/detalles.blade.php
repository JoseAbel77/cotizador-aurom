<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
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

                        <a class="navbar" href="/admin"><img src="{{asset('/imagenes/aurom.jpg')}}" height="350px" width="230" alt="" class="img-fluid center-block"/></a>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow show">
                                <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="mr-2 d-none d-lg-inline text-gray-800">
                                        {{ Auth::user()->email }}
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> 
                        </ul>   
                    </nav>
                </div>
                    <!-- Contenido Detalles -->
                <div class="p-5">
                    <a href="/admin" type="button" class="btn btn-outline-danger mr-auto" ><i class="fa-solid fa-arrow-left"></i>Atrás</a>
                </div>
                <br>
                <div class="container-fluid">
                    <div class="row col-12 p-5">
                        <!-- Carta cliente -->
                        <div class="card col-3">
                            <div class="card-body">
                                <h5 class="card-title">Detalles cliente</h5>
                                <p class="card-text"><b>Nombre del cliente:</b><br> 
                                    {{ $detalles->nombre }} {{$detalles->AP}} {{$detalles->AM}} <br>
                                    <b>Número de teléfono</b><br>
                                    {{$detalles->telefono}}<br>
                                    <b>Correo electrónico</b><br> 
                                    {{ $detalles->email}} <br></p>
                            </div>
                        </div>
                        <!-- Carta empresa -->
                        <div class="card col-3">
                            <div class="card-body">
                                <h5 class="card-title">Detalles empresa</h5>
                                <p class="card-text"><b>Nombre de la empresa:</b><br> 
                                    {{ $detalles->nombre_empresa }}<br>
                                    <b>Teléfono de la empresa:</b><br>
                                    {{$detalles->telefono_empresa}}<br>
                                    <b>Dirección de la empresa:</b><br> 
                                    {{ $detalles->direccion}} <br>
                                    <b>Número de trabajadores:</b><br> 
                                    {{ $detalles->num_trabajadores}} <br>
                                    <b>Giro de la empresa:</b><br> 
                                    {{ $detalles->giro}} <br></p>
                            </div>
                        </div>
                        <!-- Carta Cotizacion -->
                        <div class="card col-3">
                            <div class="card-body">
                                <h5 class="card-title">Detalles de la cotización</h5>
                                <p class="card-text"><b>ID de la cotización</b><br> 
                                    {{ $detalles->id }}<br>
                                    <b>Tipo de servicio:</b><br>
                                    {{$detalles->servicio}}<br>
                                    <b>Recursos solicitados:</b><br> 
                                    {{ $detalles->recursos}} <br>
                                    <b>Precio estimado: </b><br> 
                                <b>${{ number_format($detalles->precio,2,'.', '')}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Final Contenido Detalles -->
            </div>
        </div>         
    </div>
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
     <!-- Footer -->
     <footer class="text-center text-white fixed-bottom" style="background-color: #c00000;">
        <!--<div class="container p-4"></div>-->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://aurom.mx/">AUROM</a>
        </div>
    </footer>
    <!-- End Footer -->
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
    <script>
        var idEliminar=0;
        $(document).ready(function(){
            $(".btnEliminar").click(function(){
                var id= $(this).data('id');
                idEliminar = id;
            });
            $("#doEliminar").click(function(){
                $("#formDelete_"+idEliminar).submit();
            });
        });
    </script>
</body>
</html>