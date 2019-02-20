<?php
class Conexion{
	private $conexion;

	function __construct(){
		if ($this->conexion == null) {
			try {
				$this->conexion = new mysqli("localhost","prueba","123456","escuela1");
				//echo "<script> alert('Connection enabled'); </script>";
			} catch (Exception $e) {
				echo "Error al conectar".$e->getMessage();	
			}
		}else{
			echo "Ya hay una conexion activa";
		}
	}

	function consulta($consulta){
		try {
			$result = $this->conexion->query($consulta);
			if ($result) {
				//echo "<script> alert('query success'); </script>";
				return $result;
			}else{
				echo "<script> alert('consulta fallida'); </script>";
			}	
		} catch (Exception $e) {
			echo "error en la consulta";
		}
	}
}

?>