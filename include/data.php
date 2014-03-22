<?php
class Data{
	var $db;

	function Data($db)
	{
		$this->db=$db;
	}// Fin de constructor

	public function getList($sql){
		
		$result_query = $conexion_db->query($sql);
		 
		if($result_query === false) {
		  trigger_error('Error en el SQL: ' . $sql . ' Error: ' . $conexion_db->error, E_USER_ERROR);
		} else {
		  $rows_returned = $result_query->num_rows;
		
		}

 		if($rows_returned == 0){
			return NULL;
		}else{// Pasa a un arreglo los resultados			
			$array_query = array(); 
			while ($row = $conexion_db->fetch_array($result_query)) { 
			  $array_query[] = $row; 
			} 
			return $array_query;	
		}
	}// Fin de método 
}


 
