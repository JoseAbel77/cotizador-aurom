$(document).ready(function(){
   
    //Caché para datos
    $('#modalUsuario').modal('toggle');
    if(localStorage.getItem('data')){
        todo=JSON.parse(localStorage.getItem('data'));
    }
    //Ocultar modals
    $("#mensajesCliente").hide();
    $("#mensajesEmpresa").hide();
    $("#btnListo").click(function(){
       // $("#form").submit();
       $.ajax({
        url: '/coti', 
        method: 'POST',
        data: $("#form").serialize()
       }).done(function(res){
            console.log(res);
        
        });
    });
    //Ocultar las validaciones
    $("#form").find('.form-control').keyup(function(){
        $("#mensajesCliente").find("ul").find("li").remove();
        $("#mensajesCliente").hide();
        $("#mensajesEmpresa").find("ul").find("li").remove();
        $("#mensajesEmpresa").hide();
    });
    //BOTON MODAL USUARIO
    $("#btnCliente").click(function(){
       
        var nombre = document.getElementById('nombre').value;
        var mensajes = "";
        if(nombre.length == 0){
            mensajes += '<li> Agregue un nombre</li>'
        }
        var AP = document.getElementById('AP').value;
        if(AP.length == 0){
            mensajes += '<li> Agregue un apellido paterno</li>'
        }
        var AM = document.getElementById('AM').value;
        if(AM.length == 0){
            mensajes += '<li> Agregue un apellido materno</li>'
        }
        var numero = document.getElementById('numero').value;
        if(numero.length == 0){
            mensajes += '<li> Agregue un número de teléfono</li>'
        }
        var email = document.getElementById('email').value;
        if(email.length == 0){
            mensajes += '<li> Email incorrecto</li>'
        }else{
            let regex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/

            if (regex.test(email)){
                
               } else {
                mensajes += '<li> Email incorrecto1</li>'
               }   
        }
        if(mensajes != ""){
                $("#mensajesCliente").find('ul').append(mensajes);
                $("#mensajesCliente").show();
        }else{
           $('#modalUsuario').modal('toggle');
           $('#modalEmpresa').modal('toggle');
        }
    });
    // BOTON MODAL EMPRESA
    $("#btnEmpresa").click(function(){
        var mensajes = "";
        var nombreE = document.getElementById('nombre_empresa').value;
        if(nombreE.length == 0){
            mensajes += '<li> Favor de llenar el campo </li>'
        }
        var correo = document.getElementById('correo').value;
        if(correo.length == 0){
            mensajes += '<li> Correo incorrecto</li>'
        }else{
            let regex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/

            if (regex.test(correo)){
                
               } else {
                mensajes += '<li> Correo incorrecto</li>'
               }   
        }
        var telefono = document.getElementById('telefono_empresa').value;
        if(telefono.length == 0){
            mensajes += '<li> Agregue el teléfono de la empresa</li>'
        }
        var direccion = document.getElementById('direccion').value;
        if(direccion.length == 0){
            mensajes += '<li> Agregue una dirección</li>'
        }
        var trabajadores = document.getElementById('num_trabajadores').value;
        if(trabajadores.length == 0){
            mensajes += '<li> Agregue el número de trabajadores</li>'
        }
        var giro = document.getElementById('giro').value;
        if(giro.length == 0){
            mensajes += '<li> Agregue el giro de la empresa</li>'
        }
        if(mensajes != ""){
            $("#mensajesEmpresa").find('ul').append(mensajes);
            $("#mensajesEmpresa").show();
        }else{
            $('#modalEmpresa').modal('toggle');
            $('#modalServicio').modal('toggle');
        }
    });
    //BOTON MODAL TIPO SERVICIO
    $("#btnCapacitacion").click(function(){      
        $("#tipoServicio").val('capacitacion');
    });
    $("#btnAuditoria").click(function(){
        $("#tipoServicio").val('auditoria');
    });
    $("#btnConsultoria").click(function(){
        $("#tipoServicio").val('consultoria');
    });
    //BOTON MODAL SERVICIO
    //Capacitacion
    $('#enviar').click(function(){
        var selected = '';   
        let totalSumado = 0; 
        $('#modalCapacitacion input[type=checkbox]').each(function(){
            if (this.checked) {
                selected += $(this).val()+', ';
                let valor = $(this).val().split('-');        
                totalSumado = totalSumado + parseInt(valor[0])*3.33;
            }
        }); 
        console.log(totalSumado);
        if (selected != '') {
            $('#modalCapacitacion').modal('toggle');
            $('#modalListo').modal('toggle');  
            $("#capacitacionCheck").val(selected);
            $("#capacitacionSuma").val(totalSumado);
        }else{
            alert('Debes seleccionar al menos una opción.');
        }
        return false;
        
    });  
    //Auditoria
    $('#enviar1').click(function(){
        var selected = '';
        let totalSumado = 0;     
        $('#modalAuditoria input[type=checkbox]').each(function(){
            if (this.checked) {
                selected += $(this).val()+', ';
                let valor = $(this).val().split('-');        
                totalSumado = totalSumado + parseInt(valor[0])*3.33;
            }
        }); 
        console.log(totalSumado);

        if (selected != '') {
            $('#modalAuditoria').modal('toggle');
            $('#modalListo').modal('toggle'); 
            $("#auditoriaCheck").val(selected);
            $("#auditoriaSuma").val(totalSumado);
            console.log(selected)  
        }else{
            alert('Debes seleccionar al menos una opción.');
        }
        return false;
    }); 
    //Consultoria
    $('#enviar2').click(function(){
        var selected = '';
        let totalSumado = 0;     
        $('#modalConsultoria input[type=checkbox]').each(function(){
            console.log(this);
            if (this.checked) {
                selected += $(this).val()+', ';
                let valor = $(this).val().split('-');        
                totalSumado = totalSumado + parseInt(valor[0])*3.33;
            }
        }); 
        console.log(totalSumado);
        
        if (selected != '') {
            $('#modalConsultoria').modal('toggle');
            $('#modalListo').modal('toggle');  
            $("#consultoriaCheck").val(selected);
            $("#consultoriaSuma").val(totalSumado);
            console.log(selected) 
        }else{
            alert('Debes seleccionar al menos una opción.');
        }
        return false;
    }); 
});