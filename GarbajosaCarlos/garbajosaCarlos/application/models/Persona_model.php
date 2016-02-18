<?php
class Persona_model extends CI_Model{
	
	function insertar( $nombre ){
		
	if($nombre==""){
			return "no";
		}
		$ql = $this->db->select('nombre')->from('personas')->where('nombre',$nombre)->get();
		
		if( $ql->num_rows() > 0 ) {
				
			return "existe";
		} else {
		
		$this->nombre=$nombre;
	
		$this->db->insert('personas',$this);

		
		return "si";

		
	}
	}
	
	function leerTodos(){
		$this->db->select('nombre');
		$this->db->from("personas");
		
		$this->db->order_by("nombre", "asc");
		$query = $this->db->get();
		return $query->result();
	
		//return $this->db->get('departamentos')->result();
	
	}
	
	
	
	

	
	
	
	
	
	
}

?>