function agregaformEmpleado(datos){
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
             "&areaU="+areaU+;

	$.ajax({
		type:"POST",
		url:"actualizarEmpleado.php",
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
                , function(){ alertify.error('Cancel')});
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