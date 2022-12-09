<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte cotización</title>
    <link rel="icon" href="{{asset('/imagenes/icono.png')}}">
    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        table{
            font-size: x-small;
        }
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
        footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;

                /** Estilos extra personales **/
                background-color: #c00000;
                color: white;
                text-align: center;
                line-height: 1.5cm;
            }
    </style>
</head>
<body>
  <table width="100%">
    <tr>
        <td valign="top"><img src="./imagenes/aurom.jpg" height="120px" width="350px" alt="" class="img-fluid center-block"/></td>
        <td align="right">
            <h3><strong>AUROM</strong></h3>
            <pre>
                Sistematización y Certificación
                Atención a clientes e información de nuestras soluciones:
                soluciones@aurom.mx

                Quejas, comentarios o sugerencias:
                direccion@aurom.mx
                aurom@aurom.mx

                Telefóno: 5543154600
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>From:</strong> AUROM</td>
        <td><strong>To:</strong> {{ $cotizacion->nombre }} {{ $cotizacion->AP }} {{ $cotizacion->AM }}</td>
    </tr>

  </table>

  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>Nombre del cliente</th>
        <th>Nombre de la empresa</th>
        <th>Tipo de servicio</th>
        <th>Recursos</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $cotizacion->nombre }} {{ $cotizacion->AP }} {{ $cotizacion->AM }}</td>
        <td align="right">{{ $cotizacion->nombre_empresa}}</td>
        <td align="right">{{ $cotizacion->servicio }}</td>
        <td align="right">{{ $cotizacion->recursos }}</td>
      </tr>
    </tbody>

    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total $</td>
            <td align="right" class="gray">${{ number_format($cotizacion->precio,2,'.', '')}}*</td>
        </tr>
    </tfoot>
  </table>
  <footer> 
    <p>Copyright <?php echo date("Y"); ?> 
     *El precio mostado en esta cotización es un estimado del costo real</p>
    
  </footer>
</body>
</html>