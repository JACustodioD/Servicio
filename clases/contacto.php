<?php
require_once("../settings/conexion.php");
session_start();
class Contacto{
	public $db;
	public $cont_curp;
	public $cont_pas;
	public $cont_nom;
	public $cont_apa;
	public $cont_ama;
	public $cont_tel;
	public $cont_dir;

	function __construct(){
		$this->db = new Conexion();
	}
	//FUNCION PARA AGREGAR UN USUARIO EN LA BASE DE DATOS
	function agregarCont(){
		$consulta = "INSERT INTO cont VALUES ('$this->cont_curp','$this->cont_pas','$this->cont_nom','$this->cont_apa','$this->cont_ama','$this->cont_tel','$this->cont_dir') ";
		if ($this->cont_curp == null) {
			echo "Ingresa datos para continuar";
		}else{
			$this->db->consulta($consulta);
		}

	}
	//FUNCION PARA COLOCAR LOS VALORES DESDE LA BD EN LAS VARIABLES DE CLASE DE CIERTO CONTACTO
	function mostrar($cont_curp){
		$consulta = "SELECT * FROM cont WHERE cont_curp = '$cont_curp'";
		$result = $this->db->consulta($consulta);
		foreach ($result as $k) {
			$this->cont_curp = $k['cont_curp'];
			$this->cont_pas = $k['cont_pass'];
			$this->cont_nom = $k['cont_nom'];
			$this->cont_apa = $k['cont_appa'];
			$this->cont_ama = $k['cont_apma'];
			$this->cont_tel = $k['cont_tel'];
			$this->cont_dir = $k['cont_dir'];
		}
	}
	//FUNCION PARA MOSTRAR TODOS LOS REGISTROS EN UNA TABLA
	function mostrarTabla(){
		$consulta = "SELECT * FROM cont";
		$result = $this->db->consulta($consulta);
		foreach ($result as $k) {
			echo"<tr>";
			echo "<td>".$k['cont_curp']."</td>";
			echo "<td>".$k['cont_nom']."</td>";
			echo "<td>".$k['cont_appa']."</td>";
			echo "<td>".$k['cont_apma']."</td>";
			echo "<td>".$k['cont_tel']."</td>";
			echo "<td>".$k['cont_dir']."</td>";
			echo "<td>".'<a href= "../settings/proceso.php?cod=7&curp_mod='.$k['cont_curp'].'" class="btn btn-outline-primary my-2 my-sm-0 danger btn-block" >Modificar</a>'."</td>";
			echo "<td>".'<a href= "../settings/proceso.php?cod=8&curp_eli='.$k['cont_curp'].'" class="btn btn-outline-danger my-2 my-sm-0 danger btn-block" >Eliminar</a>'."</td>";
			echo "</tr>";
		}
	}
	//FUNCION PARA EL INICIO DE LA SESION DESDE LA PARTE DE USUARIOS
	function inicioSesion($usr,$pas){
		$this->cont_curp = $usr;
		$this->cont_pas = $pas;
		$consulta = "SELECT * FROM cont WHERE cont_curp = '$this->cont_curp' AND cont_pass = '$this->cont_pas' ";
		if ($this->cont_curp == null) {
			echo "<script> window.location.href='../pages/loginUser.php'; </script>";
		}else{
			$result = $this->db->consulta($consulta);
			if ($result->num_rows > 0) {
				foreach ($result as $k) {
					$_SESSION['user'] = $k['cont_curp'];
				}
				header("Location:../pages/Menu.php");
			}else{
				echo "<script> alert('Usuario y/o contraseña incorrectos'); </script>";
				header("Location: ../pages/loginUser.php");
			} 
		}
			

	}
	//FUNCION PARA GUARDAR VALORES EN VARIABLES Y LUEGO A LA BD (EN DUDA DE EXISTENCIA)
	function registrarUsuario($cont_curp,$cont_pas,$cont_nom,$cont_apa,$cont_ama,$cont_tel,$cont_dir){
		$this->cont_curp = $cont_curp;
		$this->cont_pas = $cont_pas;
		$this->cont_nom = $cont_nom;
		$this->cont_apa = $cont_apa;
		$this->cont_ama = $cont_ama;
		$this->cont_tel = $cont_tel;
		$this->cont_dir = $cont_dir;
		$this->agregarCont();
	}
	//FUNCION PARA ELIMINAR UN USUARIO EN ESPECIFICO
	function eliminar($cont_curp){
		$consulta = "DELETE FROM cont WHERE cont_curp = '$cont_curp' ";
			if ($cont_curp == null) {
			echo "<script> window.location.href='../pages/MenuAdmin.php'; </script>";
		}else{
			$result = $this->db->consulta($consulta);
				header("Location: ../pages/MenuAdmin.php");
		} 
	}
	//FUNCION PARA MODIFICAR UN USUARIO EN ESPECIFICO
	function modificarUsuario($cont_curp,$cont_pas,$cont_nom,$cont_apa,$cont_ama,$cont_tel,$cont_dir){
		$consulta = "UPDATE cont SET cont_pass = '$cont_pas', cont_nom ='$cont_nom', cont_appa = '$cont_apa', cont_apma = '$cont_ama', cont_tel = '$cont_tel', cont_dir = '$cont_dir' WHERE cont_curp = '$cont_curp' ";
		if ($cont_curp == null) {
			echo "Ingresa datos para continuar";
		}else{
			$this->db->consulta($consulta);
			echo "<script> window.location.href=('../pages/MenuAdmin.php'); </script>";  
		}
	}
}

?>