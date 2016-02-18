<?php
class Aficion_model extends CI_Model{
	
	
	
	function leerTodos(){
		$this->db->select('idaf, nombre');
		$this->db->from("aficiones");
		//$this->db->where('edad>','21');
		//$this->db->order_by("categoria", "asc");
		$query = $this->db->get(); 
		return $query->result();
		
		//return $this->db->get('departamentos')->result();
		
	}
	
	
	function leerTodosNormal(){
		$this->db->select('nombre');
		$this->db->from("participantes");
		//$this->db->where('edad>','21');
		$this->db->order_by("nombre", "asc");
		$query = $this->db->get();
		//return $query->result();
		
		return $query->result();
		//return $this->normalizar( $this->db->get()->result());
	
		//return $this->db->get('departamentos')->result();
	
	}
	
	function normalizar($jugadores){
		/*$elementos=[];
		
		foreach ($jugadores as $jugador){
			
			$persona[]=$jugador->nombre;
			array_push($elementos, $persona);
			
		}
		return $elementos;*/
		return $jugadores;
	}
	function leerJugador($jugador){
		$this->db->select('nombre, edad, categoria');
		$this->db->from("participantes");
		$this->db->where('nombre',$jugador);
		//$this->db->order_by("categoria", "asc");
		$query = $this->db->get();
		return $query->result();
		
	}
	
	/*function insertar($nombre,$edad,$categoria){
		
		$this->db->select('nombre, edad, categoria');
		$this->db->from("participantes");
		
		$query = $this->db->get();
		$count=$query->num_rows();
		
		if($count!=0){
			
			$this->nombre=$nombre;
			$this->edad=$edad;
			$this->categoria=$categoria;
			$this->db->insert('participantes',$this);
			$mensaje="si";
			return $mensaje;
			
			
		}else{
			
			$mensaje="existe";
			return $mensaje;
		}
		
		
		
	}*/
	
	function insertar($aficion){
		
		if($aficion==""){
			return "no";
		}
		$ql = $this->db->select('nombre, idaf')->from('aficiones')->where('nombre',$aficion)->get();
		
		if( $ql->num_rows() > 0 ) {
			
			return "existe";
		} else {
		$this->nombre=$aficion;
		
		$this->db->insert('aficiones',$this);
		return "si";
		}
		
		
		
		
	}
	function modificar($id,$nombre,$edad,$categoria){
		$data = array(
				'nombre' => $nombre,
				'edad' => $edad,
				'categoria' => $categoria
		);
		
		//$sql=$this->db->query("UPDATE participantes SET nombre='".$nombre."', edad='".$edad."' WHERE nombre='".$id."'");
		
		
		
		/*UPDATE participantes SET nombre='//carlitos', edad='22' WHERE nombre='carlos'*/
		
		
		
			 $this->db->where('nombre', $id);
			 $sql=$this->db->update('participantes', $data);
			
			 
		
		if($sql){
			return "si";
			
		}else{
			return "no";
		}
		
		
		
		
	}
	
	
	function borrar($nombre){
		$this->db->where('nombre', $nombre);
		$sql=$this->db->delete('participantes');
		
		if($sql){
			return "si";
				
		}else{
			return "no";
		}
	}
}




?>