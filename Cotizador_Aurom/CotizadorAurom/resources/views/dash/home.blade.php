<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cotizador Aurom</title>
    <link rel="icon" href="{{asset('/imagenes/icono.png')}}">

    <!-- Custom fonts for this template-->
    <link href="{{asset('/dash/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/dash/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('/dash/css/estilos.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <a class="navbar" href="index.php"><img src="{{asset('/imagenes/aurom.jpg')}}" height="350px"
                                width="230" alt="" class="img-fluid center-block" /></a>

                    </nav>





            </div>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->


            <form action="/coti" method="POST" enctype="multipart/form-data" id="form">
               
            <!-- Content Row -->

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h4 class="h4 mb-0 text-gray-800 p-3">¡Realice su cotización!</h4>
                    <a href="/cita" class="d-sm-inline-block btn btn-sm btn-danger shadow-sm color-boton"><i
                            class="fa fa-duotone fa-calendar-days text-white-50"></i> Agendar cita
                    </a>
                    <a href="#" data-toggle="modal" data-target="#modalUsuario"
                        class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm color-boton"><i
                            class="fa-solid fa-calculator text-white-50"></i> Agregar cotizacion
                    </a>
                    <div class="row">
                        <!--SUCCESS -->
                        @if($message = Session::get('Listo'))
                        <div class="row alert alert-success fade show">
                            <h5 class="col-12"> <i class="fa fa-check"></i> Alerta</h5>
                            <br>
                            <br>
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                    </div>

                    <!-- MODAL USUARIO-->
                    @csrf
                    <div class="modal" tabindex="-1" role="dialog" id="modalUsuario">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header modal-content-bg">
                                    <h5 class="modal-title">Datos del cliente</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                        id="closeCliente">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body row">
                                    <div class="text-center col-md-6">
                                        <img class="img-fluid center-block" src="{{asset('/imagenes/aurom.jpg')}}" alt="">
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-group" class="col-6">
                                            <label for="nombre">Nombre(s)</label>
                                            <input type="text" class="form-control" id="nombre" placeholder="Nombre"
                                                name="nombre" value="{{ old('nombre') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="AP">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="AP" placeholder="Apellido paterno"
                                                name="AP" value="{{ old('AP') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="AM">Apellido Materno</label>
                                            <input type="text" class="form-control" id="AM" placeholder="Apellido materno"
                                                name="AM" value="{{ old('AM') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="numero">Número telefónico</label>
                                            <input type="text" class="form-control" id="numero"
                                                placeholder="Número telefónico" name="numero" value="{{ old('numero') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="correo">Correo electrónico</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="email@example.com" name="email" value="{{ old('email') }}">
                                        </div>
                                        <br>
                                        <div class="alert alert-danger" id="mensajesCliente">
                                            <ul></ul>
                                        </div>
                                        <div class="modal-footer">
                                            <a type="button" class="btn btn-outline-danger" href="https://aurom.mx/"><i
                                                    class="fa-solid fa-xmark"></i> Cancelar</a>
                                            <button type="button" class="btn btn-outline-success" id="btnCliente"><i
                                                    class="fa-solid fa-arrow-right"></i>
                                                Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.container-fluid -->
                    <!-- MODAL Empresa-->

                    <div class="modal" tabindex="-1" role="dialog" id="modalEmpresa">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Datos de la empresa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nombre_empresa">Nombre de la empresa</label>
                                        <input type="text" class="form-control" id="nombre_empresa"
                                            placeholder="Nombre de la empresa" name="nombre_empresa"
                                            value="{{ old('nombre_empresa') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Correo</label>
                                        <input type="email" class="form-control" id="correo" placeholder="email@example.com"
                                            name="correo" value="{{ old('correo') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono_empresa">Teléfono</label>
                                        <input type="text" class="form-control" id="telefono_empresa"
                                            placeholder="Número de télefono" name="telefono_empresa"
                                            value="{{ old('telefono_empresa') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="direccionEmpresa">Dirección de la empresa</label>
                                        <input type="text" class="form-control" id="direccion"
                                            placeholder="Calle, número, colonia, ciudad." name="direccion"
                                            value="{{ old('direccion') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="num_trabajadores">Número de trabajadores</label>
                                        <input type="number" class="form-control" id="num_trabajadores"
                                            placeholder="¿Cuántas personas conforman a la empresa?" name="num_trabajadores"
                                            value="{{ old('num_trabajadores') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="giro">Giro de la empresa</label>
                                        <textarea type="text" class="form-control" id="giro"
                                            placeholder="Descripción del alcance o servicio que ofrece" name="giro"
                                            value="{{ old('giro') }}"></textarea>
                                    </div>
                                    <br>
                                    <div class="alert alert-danger" id="mensajesEmpresa">
                                        <ul></ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-warning mr-auto" data-toggle="modal"
                                            data-target="#modalUsuario" data-dismiss="modal"><i
                                                class="fa-solid fa-arrow-left"></i>Atrás</button>
                                        <a type="button" class="btn btn-outline-danger" href="https://aurom.mx/"><i
                                                class="fa-solid fa-xmark"></i> Cancelar</a>
                                        <button type="button" class="btn btn-outline-success" id="btnEmpresa"><i
                                                class="fa-solid fa-arrow-right"></i>
                                            Siguiente</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- MODAL SERVICIOS -->

                    <div class="modal" tabindex="-1" role="dialog" id="modalServicio">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tipo de servicio</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="dropdown">
                                        <label for="tipoServicio">¿Qué tipo de servicio necesita?</label>
                                        <input type="hidden" id="tipoServicio" name="tipoServicio">
                                        <br>
                                        <button type="button" class="btn btn-outline-warning mr-auto" data-toggle="modal"
                                            data-target="#modalEmpresa" data-dismiss="modal"><i
                                                class="fa-solid fa-arrow-left"></i>Atrás</button>
                                        <button type="button" class="btn btn-outline-danger dropdown-toggle"
                                            id="tipoServicio" data-toggle="dropdown">Elija una opcion</button>
                                        <div class="dropdown-menu">
                                            <span data-toggle="tooltip" title="Proporcione capacitación a sus colaboradores sobre las nuevas metodologías empresariales.
                                                Nuestros cursos están diseñados no sólo para obtener información.">
                                                <a class="dropdown-item" href="#" data-target="#modalCapacitacion"
                                                    data-toggle="modal" data-dismiss="modal"
                                                    id="btnCapacitacion">Capacitación</a>
                                            </span>
                                            <span data-toggle="tooltip"
                                                title="Servicio profesional independiente que busca verificar el grado de cumplimiento de su 
                                            organización con respecto a un estándar, plan o modelo, dando asistencia en el ajuste y presentación a la dirección.">
                                                <a class="dropdown-item" href="#" data-target="#modalAuditoria"
                                                    data-toggle="modal" data-dismiss="modal" id="btnAuditoria">Auditoría</a>
                                            </span>
                                            <span data-toggle="tooltip"
                                                title="Le acompañamos en la implementación de un sistema de gestión realizando visitas periódicas 
                                            donde revisamos, realizamos recomendaciones y damos seguimiento a los procesos con el objetivo de que cumplan con los requerimientos pactados.">
                                                <a class="dropdown-item" href="#" data-target="#modalConsultoria"
                                                    data-toggle="modal" data-dismiss="modal"
                                                    id="btnConsultoria">Consultoría</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODALS CONDICIONALES -->
                <!-- Modal capacitacion -->

                <div class="modal" tabindex="-1" role="dialog" id="modalCapacitacion">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Capacitacion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <input type="hidden" id="capacitacionCheck" name="capacitacionCheck">
                            <input type="hidden" id="capacitacionSuma" name="capacitacionSuma">
                            <div class="modal-body">
                                <label>Por favor, seleccione el tipo de recurso humano que necesita</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="4000-Instructor intermodelo"
                                        id="instructorIntermodelo" name="rol[]">
                                    <label for="instructorIntermodelo" data-toggle="tooltip" data-placement='right'
                                        data-original-title="Brinda capacitación de más de dos modelos, norma o sectores especializados.">
                                        Instructor Intermodelo </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="4000-Instructor especialista"
                                        id="instructorEspecialista" name="rol[]">
                                    <label for="auditorEspecialista" data-toggle="tooltip" data-placement='right'
                                        data-original-title="Brinda capacitación en algún modelo, norma o sector especializado">
                                        Instructor Especialista</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="3000-Instructor" id="instructor"
                                        name="rol[]">
                                    <label for="instructor" data-toggle="tooltip" data-placement='right'
                                        data-original-title="Proporciona capacitación en temas básicos"> Instructor</label>
                                </div>
                                <br>
                            </div>
                            <div class="modal-body">
                                <label>Por favor, seleccione el tipo de recurso material que necesita</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="42-Kit de capacitación Básico"
                                        id="kitBasico" name="rol[]">
                                    <label for="kitBasico" data-toggle="tooltip" data-placement='right'
                                        data-original-title="Constancias, exámen"> Kit de capacitación básico </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="83-Kit de capacitación con manuales" id="kitManuales" name="rol[]">
                                    <label for="kitManuales" data-toggle="tooltip" data-placement='right'
                                        data-original-title="Incluye carpeta, hojas de trabajo, manual de participante, constancias, exámen, pluma BIC.">
                                        Kit de capacitación con manuales</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="124-Kit de capacitación de lujo"
                                        id="kitLujo" name="rol[]">
                                    <label for="kitLujo" data-toggle="tooltip" data-placement='right'
                                        data-original-title="Incluye carpeta, hojas de trabajo, manual de participante, constancias, exámen, pluma BIC, Coffebreak.">
                                        Kit de capacitación de lujo</label>
                                </div>
                                <br>
                                <!--<div class="alert alert-danger" id="mensajesCapacitacion">
                                    <ul></ul>
                                </div> -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-warning mr-auto" data-toggle="modal"
                                    data-target="#modalServicio" data-dismiss="modal"><i
                                        class="fa-solid fa-arrow-left"></i>Atrás</button>
                                <a type="button" class="btn btn-outline-danger" href="https://aurom.mx/"><i
                                        class="fa-solid fa-xmark"></i> Cancelar</a>
                                <button type="button" class="btn btn-outline-success" id="enviar"><i
                                        class="fa-solid fa-arrow-right"></i>
                                    Siguiente</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal auditoría -->

                <div class="modal" tabindex="-1" role="dialog" id="modalAuditoria">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Auditoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <input type="hidden" id="auditoriaCheck" name="auditoriaCheck">
                            <input type="hidden" id="auditoriaSuma" name="auditoriaSuma">
                            <div class="modal-body">
                                <label>Por favor, seleccione el tipo de recurso que necesita</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="5000-Auditor intermodelo"
                                        id="auditorIntermodelo" name="rol[]">
                                    <label for="auditorIntermodelo" data-toggle="tooltip" data-placement='right'
                                        data-original-title="Evalúa procesos en más de dos sectores, modelos o normas especializados">
                                        Auditor Intermodelo </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="5000-Auditor especialista"
                                        id="auditorEspecialista" name="rol[]">
                                    <label for="auditorEspecialista" data-toggle="tooltip" data-placement='right'
                                        data-original-title="Evalúa porcesos de un sector, modelo o norma especializados.">
                                        Auditor Especialista</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="3000-Auditor líder"
                                        id="auditorLider" name="rol[]">
                                    <label for="auditorLider" data-toggle="tooltip" data-placement='right'
                                        data-original-title="Planea, dirige y ejectua una auditoría."> Auditor Lider</label>
                                </div>
                                <br>
                                <!-- <div class="alert alert-danger" id="mensajesAuditoria">
                                    <ul></ul>
                                </div> -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-warning mr-auto" data-toggle="modal"
                                    data-target="#modalServicio" data-dismiss="modal"><i
                                        class="fa-solid fa-arrow-left"></i>Atrás</button>
                                <a type="button" class="btn btn-outline-danger" href="https://aurom.mx/"><i
                                        class="fa-solid fa-xmark"></i> Cancelar</a>
                                <button type="button" class="btn btn-outline-success" id="enviar1"><i
                                        class="fa-solid fa-arrow-right"></i>
                                    Siguiente</button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal consultoría -->

                <div class="modal" tabindex="-1" role="dialog" id="modalConsultoria">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Consultoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <input type="hidden" id="consultoriaCheck" name="consultoriaCheck">
                            <input type="hidden" id="consultoriaSuma" name="consultoriaSuma">
                            <div class="modal-body">
                                <label>Por favor, seleccione el tipo de recurso que necesita</label>
                                <br><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="4000-Consultor Intermodelo (Subcontratado)"
                                        id="consultorIntermodeloSubcontratado" name="rol[]">
                                    <label for="consultorIntermodeloSubcontratado" data-toggle="tooltip"
                                        data-placement="right"
                                        data-original-title="Propone mejoras y soluciones en los diferentes procesos en más de dos normas, modelos o sectores en los que es especialista.">Consultor
                                        Intermodelo (Subcontratado)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="3500-Consultor Especialista (Subcontratado)"
                                        id="consultorEspecialistaSubcontratado" name="rol[]">
                                    <label for="consultorEspecialistaSubcontratado" data-toggle="tooltip"
                                        data-placement="right"
                                        data-original-title="Propone mejoras y soluciones en los diferentes procesos en una norma, modelo o sector en el que es especialista.">Consultor
                                        Especialista (Subcontratado)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="2500-Consultor líder (Subcontratado)" id="consultorLiderSubcontratado"
                                        name="rol[]">
                                    <label for="consultorLidersubcontratado" data-toggle="tooltip" data-placement="right"
                                        data-original-title="Planea, dirige, propone e implementa mejoras y soluciones en los diferentes procesos de acuerdo al alcance del proyecto con el cliente.">Consultor
                                        Lider (Subcontratado)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2612-Consultor intermodelo (TC)"
                                        id="consultorIntermodeloTiempoCompleto" name="rol[]">
                                    <label for="consultorIntermodeloTiempoCompleto" data-toggle="tooltip"
                                        data-placement="right"
                                        data-original-title="Propone mejoras y soluciones en los diferentes procesos en más de dos normas, modelos o sectores en los que es especialista.">Consultor
                                        Intermodelo (Tiempo Completo)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2000-Consultor especialista (TC)"
                                        id="consultorEspecialistaTiempoCompleto" name="rol[]">
                                    <label for="consultorEspecialistaTiempoCompleto" data-toggle="tooltip"
                                        data-placement="right"
                                        data-original-title="Propone mejoras y soluciones en los diferentes procesos en una norma, modelo o sector en el que es especialista.">Consultor
                                        Especialista (Tiempo Completo)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1330-Consultor líder (TC)"
                                        id="consultorLiderTiempoCompleto" name="rol[]" data-precio="1350">
                                    <label for="consultorLiderTiempoCompleto" data-toggle="tooltip" data-placement="right"
                                        data-original-title="Planea, dirige, propone e implementa mejoras y soluciones en los diferentes procesos de acuerdo al alcance del proyecto con el cliente.">Consultor
                                        Lider (Tiempo Completo)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="925-Consultor" id="consultor"
                                        name="rol[]">
                                    <label for="consultor" data-toggle="tooltip" data-placement="right"
                                        data-original-title="Propone e implementa mejoras y soluciones en los diferentes procesos de acuerdo al alcance del proyecto con el cliente.">
                                        Consultor</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="862-Ingeniero de procesos"
                                        id="ingenieroProcesos" name="rol[]">
                                    <label for="ingenieroProcesos" data-toggle="tooltip" data-placement="right"
                                        data-original-title="Analiza procesos para identificar posibles.">
                                        Ingeniero de procesos</label>
                                </div>
                            </div>
                            <br>
                            <!--<div class="alert alert-danger" id="mensajesConsultoria">
                                <ul></ul>
                            </div>-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-warning mr-auto" data-toggle="modal"
                                    data-target="#modalServicio" data-dismiss="modal"><i
                                        class="fa-solid fa-arrow-left"></i>Atrás</button>
                                <a type="button" class="btn btn-outline-danger" href="https://aurom.mx/"><i
                                        class="fa-solid fa-xmark"></i> Cancelar</a>
                                <button type="button" class="btn btn-outline-success" id="enviar2"><i
                                        class="fa-solid fa-arrow-right"></i>
                                    Siguiente</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!--MODAL LISTO-->
                <div class="modal" tabindex="-1" role="dialog" id="modalListo">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Registrar datos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <h3>Click en listo para generar su cotización</h3>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-outline-danger" href="https://aurom.mx/"><i
                                        class="fa-solid fa-xmark"></i> Cancelar</a>
                                <button type="button" class="btn btn-outline-success" data-toggle="modal" id="btnListo"
                                    data-target="#modalReporte" data-dismiss="modal"><i class="fa-solid fa-check"></i>
                                    Listo!</button>
                                <input type="hidden" value="asdf">
                            </div>
                        </div>

                    </div>
                </div>
                <!--MODAL REPORTE-->
                <div class="modal" tabindex="-1" role="dialog" id="modalReporte">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Reporte de su cotización</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <a href="/reporte" class="btn btn-success btn-lg">
                                    <i class="fa-solid fa-file-pdf"></i>
                                </a>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-outline-danger" href="https://aurom.mx/"><i
                                        class="fa-solid fa-xmark"></i> Cancelar</a>
                                <a type="button" class="btn btn-outline-info" href="/cita">
                                    <i class="fa-regular fa-calendar-days"></i> Agendar cita</a>
                            </div>
                        </div>

                    </div>
                </div>
             </form>
        </div>
       
        <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->
    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-responsive" src="{{asset('/imagenes/coti1.png')}}" alt="First slide" width="100%"
                    height="700">
            </div>
            <div class="carousel-item">
                <img class="img-responsive" src="{{asset('/imagenes/coti2.png')}}" alt="Second slide" width="100%"
                    height="700">
            </div>
            <div class="carousel-item">
                <img class="img-responsive" src="{{asset('/imagenes/coti3.png')}}" alt="Third slide" width="100%"
                    height="700">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Footer -->
    <footer class="text-center text-white fixed-bottom" style="background-color: #c00000;">
       
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://aurom.mx/">AUROM</a>
            <br>
            Elaborado por: Bryan B. y Abel B. del ITSNCG
        </div>
    </footer>
    <!-- End Footer -->
    </div>
    <!-- End of Page Wrapper -->

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
    <script src="{{asset('/dash/js/cotizador.js')}}"></script>

    <!-- Script font awesome-->
    <script src="https://kit.fontawesome.com/bf146cd1f6.js" crossorigin="anonymous"></script>
</body>

</html>