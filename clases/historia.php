<?php
require_once("../settings/conexion.php");
session_start();
class Historia{
	public $db;
	public $hme_nom;
	public $hme_tel;
	public $hme_insmed;
	public $hme_curp;

	function __construct(){
		$this->db = new Conexion();
	}
	function agregarHme(){
		$consulta = "INSERT INTO hme (hme_curp,hme_insmed,hme_nombmed,hme_telmed) VALUES ('$this->hme_curp','$this->hme_insmed','$this->hme_nom','$this->hme_tel') ";
		if ($this->hme_curp == null) {
			echo "Ingresa datos para continuar";
		}else{
			$this->db->consulta($consulta);
		}

	}
		function mostrar($alu_curp){
		$consulta = "SELECT * FROM hme WHERE hme_curp = '$alu_curp'";
		$result = $this->db->consulta($consulta);
		foreach ($result as $k) {
			$this->hme_insmed = $k['hme_insmed'];
			$this->hme_nom = $k['hme_nombmed'];
			$this->hme_tel = $k['hme_telmed'];
		}
	}
	function registrarHme($hme_curp,$hme_insmed,$hme_nom,$hme_tel){
			 $this->hme_curp = $hme_curp;
			 $this->hme_insmed = $hme_insmed;
			 $this->hme_nom = $hme_nom;
			 $this->hme_tel = $hme_tel;

			 $this->agregarHme();
	}

}

?>