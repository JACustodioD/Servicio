<?php
require_once("../settings/conexion.php");
class Observacion {
	public $db;
	public $idObservacion;
	public $nombreObs;
 
	function __construct(){
		$this->db = new Conexion();
	}
	/*function asignar($id,$nom){
		$this->idObservacion = $id;
		$this->nombreObs = $nom;
	}*/

	/*function agregarObs(){
		$consulta = "INSERT INTO Observacion VALUES ('$this->idObservacion','$this->nombreObs') ";

		if ($this->idObservacion == null) {
			echo "Ingresa datos para continuar";
		}else{
			$this->db->consulta($consulta);
		}
	}*/
	function usu_Obs($curp,$array){
		for ($i=0; $i <= sizeof($array)-1 ; $i++) { 
			$consulta = "INSERT INTO usr_obs VALUES ('$curp','$array[$i]')";
			if ($curp == null){
				echo "Ingresa datos para continuar";
			}else{
				$this->db->consulta($consulta);
				echo "<script> window.location.href='../pages/Menu.php'; </script> ";
			}
		}
	}

	function mostrar($curp){
		$consulta = "SELECT nombreObs FROM obs join usr_obs ON idObservacion = id_Obs join alu ON usr_curp = alu_curp WHERE alu_curp = '$curp' ";
		$result = $this->db->consulta($consulta);
		return $result;

	}
}
