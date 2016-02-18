<?php
class personas extends CI_Controller{
function crear(){
	$this->load->model ( 'Aficion_model', '', true );
		$datos ['aficiones'] = $this->Aficion_model->leerTodos();
	enmarcar ( $this, 'personas/crear',$datos );
}

function crearPost() {
		
		$nombre=$this->input->post('nombre');
		$aficiones=$this->input->post('aficiones');
	
		
		$this->load->model ( 'Persona_model', '', true );
		$datos ['status'] = $this->Persona_model->insertar ( $nombre,$aficiones );
		//$this->Persona_model->insertarID ( $nombre, $aficiones );
		$this->load->view ( 'personas/crearAjax', $datos );
	
}

function ver() {
	
	$this->load->model ( 'Persona_model', '', true );
	$datos ['personas'] = $this->Persona_model->leerTodos();
	enmarcar ( $this, 'personas/ver',$datos );
}
}
?>