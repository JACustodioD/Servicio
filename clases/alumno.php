<?php
require_once("../settings/conexion.php");
session_start();
class Alumno{
	public $db;
	public $alu_nom;
	public $alu_apa;
	public $alu_ama;
	public $alu_gra;
	public $alu_gru;
	public $alu_curp;
	public $alu_nac;
	public $alu_gen;
	public $alu_nal;
	public $alu_cal;
	public $alu_col;
	public $alu_mun;
	public $alu_cor;
	public $alu_est;
	public $alu_pes;
	public $alu_sgr; 
	public $alu_cont;
	
	function __construct(){
		$this->db = new Conexion();
	}
	function agregarAlu(){
		$consulta = "INSERT INTO alu VALUES ('$this->alu_curp','$this->alu_nom','$this->alu_apa','$this->alu_ama','$this->alu_gra','$this->alu_gru','$this->alu_nac','$this->alu_gen','$this->alu_nal','$this->alu_cal','$this->alu_col','$this->alu_mun','$this->alu_cor','$this->alu_est','$this->alu_pes','$this->alu_sgr','$this->alu_cont') ";
		if ($this->alu_curp == null) {
			echo "Ingresa datos para continuar";
		}else{
			$this->db->consulta($consulta);
			
			echo "<script> window.location.href='../pages/historia_medica.php'; </script>";
		}

	}
	function mostrar($alu_curp){
		$consulta = "SELECT * FROM alu WHERE alu_curp = '$alu_curp'";
		$result = $this->db->consulta($consulta);
		foreach ($result as $k) {
			$this->alu_nom = $k['alu_nom'];
			$this->alu_apa = $k['alu_appa'];
			$this->alu_ama = $k['alu_apma'];
			$this->alu_gra  = $k['alu_gra'];
			$this->alu_gru = $k['alu_gru'];
			$this->alu_curp = $k['alu_curp'];
			$this->alu_nac = $k['alu_nac'];
			$this->alu_gen = $k['alu_gen'];
			$this->alu_nal = $k['alu_nal'];
			$this->alu_cal = $k['alu_cal'];
			$this->alu_col = $k['alu_col'];
			$this->alu_mun = $k['alu_mun'];
			$this->alu_cor = $k['alu_cor'];
			$this->alu_est = $k['alu_est'];
			$this->alu_pes = $k['alu_pes'];
			$this->alu_sgr = $k['alu_sgr'];
			$this->alu_cont = $k['alu_cont'];
		}
	}

	function mostrarTabla(){
		$consulta = "SELECT * FROM alu ";
		$result = $this->db->consulta($consulta);
		foreach ($result as $k) {
			echo "<tr>";
			echo "<td>".$k['alu_curp']."</td>";
			echo "<td>".$k['alu_nom']."</td>";
			echo "<td>".$k['alu_appa']."</td>";
			echo "<td>".$k['alu_apma']."</td>";
			echo "<td>".$k['alu_gra']."</td>";
			echo "<td>".$k['alu_gru']."</td>";
			echo "<td>".$k['alu_nac']."</td>";
			echo "<td>".$k['alu_gen']."</td>";
			echo "<td>".$k['alu_nal']."</td>";
			echo "<td>".$k['alu_col']."</td>";
			echo "<td>".$k['alu_cal']."</td>";
			echo "<td>".$k['alu_mun']."</td>";
			echo "<td>".$k['alu_cor']."</td>";
			echo "<td>".$k['alu_est']."</td>";
			echo "<td>".$k['alu_pes']."</td>";
			echo "<td>".$k['alu_sgr']."</td>";
			echo "<td>".$k['alu_cont']."</td>";
			echo "<td>".'<a href= "../settings/proceso.php?cod=9&alu_mod='.$k['alu_curp'].'" class="btn btn-outline-primary my-2 my-sm-0 danger btn-block" >Modificar</a>'."</td>";
			echo "<td>".'<a href= "../settings/proceso.php?cod=10&alu_eli='.$k['alu_curp'].'" class="btn btn-outline-danger my-2 my-sm-0 danger btn-block" >Eliminar</a>'."</td>";

			echo "</tr>";
		}

	}	
	function mostrarNombre($curp){
		$consulta = "SELECT alu_nom, alu_curp FROM alu where alu_cont = '$curp'";
		$result = $this->db->consulta($consulta);
		foreach ($result as $k) {
			echo "<option value=".$k['alu_curp'].">".$k['alu_nom']."</option>";
		}
	}
		function registrarAlumno($alu_nom,$alu_apa,$alu_ama,$alu_gra,$alu_gru,$alu_curp,$alu_gen,$alu_nal,$alu_cal,$alu_col,$alu_mun,$alu_cor,$alu_est,$alu_pes,$alu_sgr,$alu_nac,$alu_cont){
			 $this->alu_nom = $alu_nom;
			 $this->alu_apa = $alu_apa;
			 $this->alu_ama = $alu_ama;
			 $this->alu_gra  = $alu_gra;
			 $this->alu_gru = $alu_gru;
			 $this->alu_curp = $alu_curp;
			 $this->alu_nac = $alu_nac;
			 $this->alu_gen = $alu_gen;
			 $this->alu_nal = $alu_nal;
			 $this->alu_cal = $alu_cal;
			 $this->alu_col = $alu_col;
			 $this->alu_mun = $alu_mun;
			 $this->alu_cor = $alu_cor;
			 $this->alu_est = $alu_est;
			 $this->alu_pes = $alu_pes;
			 $this->alu_sgr = $alu_sgr; 
			 $this->alu_cont = $alu_cont;
			 $_SESSION['curp_alu'] = $alu_curp;
			 $this->agregarAlu();
	}
	function eliminar($alu_curp){
		$usu_pad = "DELETE FROM usr_pad WHERE usr_curp = '$alu_curp'";
		$usu_obs = "DELETE FROM usr_obs WhERE usr_curp = '$alu_curp'";
		$hme = "DELETE FROM hme WhERE hme_curp = '$alu_curp'";
		$consulta = "DELETE FROM alu WHERE alu_curp = '$alu_curp' ";
			if ($alu_curp == null) {
			echo "<script> window.location.href='../pages/alumno.php'; </script>";
		}else{
			$result = $this->db->consulta($usu_pad);
			$result = $this->db->consulta($usu_obs);
			$result = $this->db->consulta($hme);
			$result = $this->db->consulta($consulta);
			header("Location: ../pages/alumno.php");
		} 
	}
	function modificarAlumno($alu_nom,$alu_apa,$alu_ama,$alu_gra,$alu_gru,$alu_curp,$alu_gen,$alu_nal,$alu_cal,$alu_col,$alu_mun,$alu_cor,$alu_est,$alu_pes,$alu_sgr,$alu_nac){
		$consulta = "UPDATE alu SET alu_nom = '$alu_nom', alu_appa = '$alu_apa', alu_apma = '$alu_ama', alu_gra = '$alu_gra',alu_gen = '$alu_gen',alu_nal = '$alu_nal',alu_cal = '$alu_cal',alu_col = '$alu_col', alu_mun = '$alu_mun', alu_cor = '$alu_cor', alu_est = '$alu_est', alu_pes = '$alu_pes', alu_sgr = '$alu_sgr', alu_nac = '$alu_nac' WHERE alu_curp = '$alu_curp' ";
		if ($alu_curp == null) {
			echo "Ingresa datos para continuar";
		}else{
			$this->db->consulta($consulta);
			echo "<script> window.location.href=('../pages/alumno.php'); </script>";  
		}
	}

}

