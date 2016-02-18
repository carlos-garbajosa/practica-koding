<?php
class aficiones extends CI_Controller{
	public function index(){
		$this->crear();	
	}
	
	function crear(){
		enmarcar ( $this, 'aficiones/crear' );
	}
function crearPost() {
		
		$nombre=$this->input->post('aficiones');
		
		$this->load->model ( 'Aficion_model', '', true );
		$datos ['status'] = $this->Aficion_model->insertar ( $nombre );
		$this->load->view ( 'aficiones/crearAjax', $datos );
	
}
}