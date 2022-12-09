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

                        <a class="navbar" href="index.php"><img src="{{asset('/imagenes/aurom.jpg')}}" height="350px" width="230" alt="" class="img-fluid center-block"/></a>
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
                <!-- Contenido Admin -->
                <div class="container">
                    <!--SUCCESS -->
                    @if($message = Session::get('Listo'))
                    <div class="row alert alert-success fade show">
                        <h5 class="col-12"> <i class="fa fa-check"></i> Alerta</h5>
                        <br>
                        <br>
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <!--PRINT PRODUCTS-->
                    <div class="row col-12">
                            @foreach($cotizacion as $c)
                            <div class="card col-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $c->nombre_empresa }}</h5>
                                    <p class="card-text"><b>Nombre del cliente:</b><br> 
                                        {{ $c->nombre }} {{$c->AP}} {{$c->AM}} <br>
                                        <b>Correo de la empresa:</b><br>
                                        {{$c->correo}}<br>
                                        <b>Recursos solicitados:</b><br> 
                                        {{ $c->recursos}} <br>
                                    <b>${{ number_format($c->precio,2,'.', '')}}</b></p>
                                    <div class="modal-footer">
                                        <button class="btn btn-sm btn-danger btnEliminar" 
                                            data-id="{{ $c->id}}"
                                            data-target="#modalDelete"
                                            data-toggle="modal">
                                            <i class="fa fa-trash"></i></button>
                                            <form action="{{ url('/admin',['id'=>$c->id])}}"
                                                method="POST" id="formDelete_{{$c->id}}">
                                                @csrf
                                                <input type="hidden" value="{{ $c->id }}" name="id">
                                                <input type="hidden" name="_method" value="delete">
                                            </form>
                                            <a class="btn btn-info btn-sm"class="btn btn-sm btn-edit btnDetalles" 
                                            href="/admin/detalles/{{$c->id}}">
                                            <i class="fa-regular fa-eye"></i></a>
                                        
                                    </div>
                                
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
                <!--Final Contenido Admin -->
            </div>
        </div>
    </div>
    
    

    <!--MODAL DELETE-->
    <div class="modal" tabindex="-1" role="dialog" id="modalDelete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Eliminar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>¿Deseas eliminar el registro?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="doEliminar">Eliminar</button>
                </div>
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
