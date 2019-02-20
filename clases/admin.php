<?php
require_once("../settings/conexion.php");
session_start();
class Admin{
	public $db;
	public $adm_usr;
	public $adm_pas;

	function __construct(){
		$this->db = new Conexion();
	}
	/*function agregarAlu(){
		$consulta = "INSERT INTO adm VALUES ('$this->adm_usr','$this->adm_pas') ";
		if ($this->adm_usr == null) {
			echo "Ingresa datos para continuar";
		}else{
			$this->db->consulta($consulta);
		}

	}*/

	/*function asignarAlu($adm_usr,$adm_pas){
		$this->adm_usr = $adm_usr;
		$this->adm_pas = $adm_pas;
	}*/

	function mostrar($adm_usr){
		$consulta = "SELECT * FROM adm WHERE adm_usr = '$adm_usr' ";
		$result = $this->db->consulta($consulta);
		foreach ($result as $k) {
			$this->adm_usr = $k['adm_usr'];
			$this->adm_pas = $k['adm_pas'];
		}
	}

	function inicioSesion($adm_usr,$adm_pas){
		echo "aquino enteo";
		$this->adm_usr = $adm_usr;
		$this->adm_pas = $adm_pas;
		$consulta = "SELECT * FROM adm WHERE adm_usr = '$this->adm_usr' AND adm_pas = '$this->adm_pas' ";
		if ($this->adm_usr == null) {
			echo "<script> window.location.href='../pages/loginAdmin'; </script>";
		}else{
			$result = $this->db->consulta($consulta);
			if ($result->num_rows > 0) {
				foreach ($result as $k) {
					$_SESSION['admin'] = $k['adm_usr'];
				}
				header("Location:../pages/MenuAdmin.php");
			}else{
				echo "<script> alert('Usuario y/o contraseña incorrectos'); </script>";
				header("Location: loginAdmin.php");
			}
		}
			

	}

	/*function registrarAlumno($adm_usr,$adm_pas){
		$this->adm_usr = $adm_usr;
		$this->adm_pas = $adm_pas;
		$this->agregarAlu();
	}*/
}

?>