<script type="text/javascript" src="<?= base_url()?>assets/js/serialize.js"></script>


<script type="text/javascript">
var conexion;

function crearAficion() {
	var formulario = document.getElementById('idFormAficiones');
	var datosSerializados = serialize(formulario);
	conexion = new XMLHttpRequest();
	conexion.open('POST', '<?= base_url() ?>aficiones/crearPost', true);
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



<h1>Nueva aficion</h1>


<form  id="idFormAficiones">
<label>Nombre de la aficion</label>
<input type="text" name="aficiones" id="aficion">
<input type="button" value="Enviar" onclick="crearAficion()">

</form>
