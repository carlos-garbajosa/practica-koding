<?php 

function pintarRadios($arrayPrincipal, $nombreRadio, $propiedad){
	
	//pintarRadios($arrayPrincipal, "jugadores", "categoria") 
	$text="";
	
	foreach ($arrayPrincipal as $principal){
		
		$text.='<input type="radio" name="'.$nombreRadio.'" value="'.$principal[$propiedad].'" id="'.$principal[$propiedad].'"><label >'.$principal[$propiedad].'</label><br />';
		
		
	
	}
	return $text;
}


/*---------------------------------------------------------------------------------------------*/



function pintarCheckbox($nombreCheckbox, $arrayPrincipal, $propiedad, $value){
	
	$text="";
	
	foreach ($arrayPrincipal as $principal){
		
		$text.='<input type="checkbox" name="'.$nombreCheckbox.'[]" value="'.$principal[$value].'" id="'.$principal[$propiedad].'"><label >'.$principal[$propiedad].'</label><br />';
		
		
	
	}
	return $text;
	
	
	}
	
/*------------------------------------------------------------------------------------------*/
	
	
	
function pintarSelect($nombreSelect,$arrayPrincipal,$propiedad,$multiple="0",$seleccionado){
	
	$text='<select name="'.$nombreSelect.'"'.(($multiple!=0)?' multiple="multiple" ':'').'>';
	
	foreach ($arrayPrincipal as $principal){
		
		$text.='<option value="'.$principal[$propiedad].'"'.($principal[$propiedad]==$seleccionado?' selected="true"':"").' >'.$principal[$propiedad].'</option>';
	}
	$text.='</select>';
	
	return $text;
	
	
	
}

/*---------------------------------------------------------------------------------------*/

/*function pintarTextArea($nombre,$columnas="50",$filas="10"){
	//pintarTextArea("texto","20","40");
	
	echo '<textarea name="'.$nombre.'" rows="'.$filas.'" cols="'.$columnas.'"></textarea>'.PHP_EOL;

}

function subirArchivo(){
	
	
	
}*/

function normalizarArray($objetos,$array){
	
	$arrayPrincipal=[];
	foreach ($objetos as $objeto){
		
		$arraySecundario=[];
		foreach ($array as $a){
			
			$arraySecundario[$a]=$objeto->$a;
			
		}
		array_push($arrayPrincipal,$arraySecundario);
		
		
	}
	return $arrayPrincipal;
	
}
?>
