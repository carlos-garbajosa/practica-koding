<script type="text/javascript" src="<?= base_url()?>assets/js/serialize.js"></script>


<script type="text/javascript">
var conexion;

function crearPersona() {
	var formulario = document.getElementById('idFormPersona');
	var datosSerializados = serialize(formulario);
	conexion = new XMLHttpRequest();
	conexion.open('POST', '<?= base_url() ?>personas/crearPost', true);
	conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
	conexion.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	conexion.send(datosSerializados);
	conexion.onreadystatechange = function() {
		if (conexion.readyState==4 && conexion.status==200) {
			accionAJAX();
		}
	}
}

		
function accionAJAX() {
	textoRecibido = conexion.responseText;
	document.getElementById("idFooter").innerHTML=textoRecibido;
}	

</script>

<!--------------------------------------------->


<h1>Nueva persona</h1>
<fieldset>
	<legend>Datos Personales</legend>
	<form id="idFormPersona">	
	<label>Nombre</label><br>
	<input type="text" name="nombre" >
	
	<fieldset>
		<legend>Aficiones</legend>
		
	
	<?php foreach($aficiones as $aficion):?>
	<input type="checkbox" name="aficiones[]" value="<?=$aficion->idaf?>"><label><?=$aficion->nombre ?></label>
	<?php endforeach;?>
	</form>
	
	
	</fieldset>


</fieldset>
<input type="button" value="Enviar" onclick="crearPersona()">