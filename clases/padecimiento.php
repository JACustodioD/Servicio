<?php
require_once("../settings/conexion.php");
class Padecimiento {
	public $db;
	public $idPadecimiento;
	public $nombrePad;

	function __construct(){
		$this->db = new Conexion();
	}
	function asignar($id,$nom){
		$this->idPadecimiento = $id;
		$this->nombrePad = $nom;
	}

	/*function agregarPad(){
		$consulta = "INSERT INTO Padecimiento VALUES ('$this->idPadecimiento','$this->nombrePad') ";

		if ($this->idPadecimiento == null) {
			echo "Ingresa datos para continuar";
		}else{
			$this->db->consulta($consulta);
		}
	}*/

    function usu_Pad($curp,$array){
		for ($i=0; $i <= sizeof($array)-1 ; $i++) { 
			$consulta = "INSERT INTO usr_pad VALUES ('$curp','$array[$i]')";
			if ($curp == null){
				echo "Ingresa datos para continuar";
			}else{
				$this->db->consulta($consulta);
			}
		}
		
	}

	function mostrar($curp){
		$consulta = "SELECT nombrePad FROM pad join usr_pad ON idPadecimiento = id_pad join alu ON usr_curp = alu_curp WHERE alu_curp = '$curp' ";
		$result = $this->db->consulta($consulta);
		return $result;

	}
}