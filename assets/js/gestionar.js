function agrega(datos){
	d = datos.split('||');
    $('#idEmpleado').val(d[0]);
	$('#nombreU').val(d[1]);
	$('#apePatU').val(d[2]);
	$('#apeMatU').val(d[3]);
	$('#calleU').val(d[4]);
	$('#coloniaU').val(d[5]);
	$('#codPostalU').val(d[6]);
	$('#numeroU').val(d[7]);
	$('#telefonoU').val(d[8]);
    $('#areaU').val(d[9]);
	$('#sueldoU').val(d[10]);
}

function agregaCliente(datos){
	d = datos.split('||');
    $('#idCliente').val(d[0]);
	$('#nombreU').val(d[1]);
	$('#calleU').val(d[2]);
	$('#coloniaU').val(d[3]);
	$('#codPostalU').val(d[4]);
	$('#numeroU').val(d[5]);
	$('#telefonoU').val(d[6]);
    $('#correoU').val(d[7]);
}

function agregaProveedor(datos){
	d = datos.split('||');
    $('#idCliente').val(d[0]);
	$('#nombreU').val(d[1]);
	$('#calleU').val(d[2]);
	$('#coloniaU').val(d[3]);
	$('#codPostalU').val(d[4]);
	$('#numeroU').val(d[5]);
	$('#telefonoU').val(d[6]);
    $('#correoU').val(d[7]);
}

function agregaProducto(datos){
	d = datos.split('||');
    $('#idProducto').val(d[0]);
	$('#nombre').val(d[1]);
	$('#descripcion').val(d[2]);
	$('#categoria').val(d[3]);
	$('#cantidad').val(d[4]);
	$('#proveedor').val(d[5]);
    $('#precio').val(d[7]);
}

function agregaProducto2(datos){
	d = datos.split('||');
    $('#idProducto2').val(d[0]);
	$('#nombre2').val(d[1]);
	$('#descripcion2').val(d[2]);
	$('#categoria2').val(d[3]);
	$('#cantidad2').val(d[4]);
	$('#proveedor2').val(d[5]);
}

function agregaVenta(datos){
	d = datos.split('||');
    $('#idVenta').val(d[0]);
	$('#producto').val(d[1]);
	$('#cantidad').val(d[2]);
	$('#fecha').val(d[3]);
	$('#hora').val(d[4]);
	$('#total').val(d[5]);
}

function agregaCompra(datos){
	d = datos.split('||');
    $('#idCompra').val(d[0]);
	$('#producto').val(d[1]);
	$('#cantidad').val(d[2]);
	$('#fecha').val(d[3]);
	$('#hora').val(d[4]);
	$('#total').val(d[5]);
}

function agregaPrestamo(datos){
	d = datos.split('||');
    $('#idPrestamo').val(d[0]);
    $('#cliente').val(d[1]);
	$('#producto').val(d[2]);
	$('#cantidad').val(d[3]);
	$('#fechaI').val(d[4]);
	$('#dias').val(d[5]);
	$('#total').val(d[6]);
}

function actualizaEmpleado(){
	idEmpleado=$('#idEmpleado').val();
	apePatU=$('#apePatU').val();
	apeMatU=$('#apeMatU').val();
	nombreU=$('#nombreU').val();
	calleU=$('#calleU').val();
	coloniaU=$('#coloniaU').val();
	codPostalU=$('#codPostalU').val();
	numeroU=$('#numeroU').val();
	telefonoU=$('#telefonoU').val();
	sueldoU=$('#sueldoU').val();
    areaU=$('#areaU').val();
	
	cadena = "idEmpleado="+idEmpleado+
	         "&apePatU="+apePatU+
			 "&apeMatU="+apeMatU+
			 "&nombreU="+nombreU+
			 "&calleU="+calleU+
			 "&coloniaU="+coloniaU+
			 "&codPostalU="+codPostalU+
			 "&numeroU="+numeroU+
			 "&telefonoU="+telefonoU+
			 "&sueldoU="+sueldoU+
             "&areaU="+areaU;
	$.ajax({
		type:"POST",
		url:"../../actualizar/actualizarEmpleado.php",
		data:cadena,
		success:function(r){
			if(r==1){
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}

function preguntarSiNoEmpleado(id){
	alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar este registro?', 
				function(){ eliminarMaestro(id) }
                , function(){ alertify.error('Cancelado')});
}

function preguntarSiNoCliente(id){
	alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar este registro?', 
				function(){ eliminarMaestro(id) }
                , function(){ alertify.error('Cancelado')});
}

function preguntarSiNoProveedor(id){
	alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar este registro?', 
				function(){ eliminarMaestro(id) }
                , function(){ alertify.error('Cancelado')});
}

function preguntarSiNoProducto(id){
	alertify.confirm('Eliminar datos', '¿Esta seguro de eliminar este registro?', 
				function(){ eliminarMaestro(id) }
                , function(){ alertify.error('Cancelado')});
}

function eliminarMaestro(id){
	cadena = "id="+id;
	$.ajax({
		type: "POST",
		url:"eliminarMaestro.php",
		data: cadena,
		success:function(r){
			if(r==1){
				alertify.success("Eliminado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}