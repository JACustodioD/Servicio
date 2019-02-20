<?php
session_start();
require_once("../clases/admin.php");
require_once("../clases/alumno.php");
require_once("../clases/contacto.php");
require_once("../clases/padecimiento.php");
require_once("../clases/observaciones.php");
require_once("../clases/historia.php");

//SI COD = 1 ES INICIO DE SESION ADMINISTRADOR
if (isset($_REQUEST['cod']) == 1 ) {
	if (isset($_POST['logAdmin'])) {
		$ad = new Admin();
		$ad->inicioSesion($_POST['adm_usr'],$_POST['adm_pas']);
		
	}

//SI COD = 2 ES INICIO DE SESION DE USUARIO
}if (isset($_REQUEST['cod']) == 2) {
	if (isset($_REQUEST['logUser']) ){
		$usr = new Contacto();
		$usr->inicioSesion($_POST['cont_curp'],$_POST['cont_pas']);
	}

//SI COD = 3 ES REGISTRO DE USUARIO DESDE PAGINA PRINCIPAL
}if (isset($_REQUEST['cod']) == 3){
	if (isset($_REQUEST['regCont'])){
		$cont = new Contacto();
		$cont->registrarUsuario($_POST['cont_curp'],$_POST['cont_pas'],$_POST['cont_nom'],$_POST['cont_apa'],$_POST['cont_ama'],$_POST['cont_tel'],$_POST['cont_dir']);;
		echo "<script> window.location.href='../pages/loginUser.php'; </script>";
	}
//SI COD = 4 ES REGISTRO DE USUARIO DESDE EL ADMINISTRADOR
}if (isset($_REQUEST['cod']) == 4){
	if (isset($_REQUEST['regContac'])){
		$cont = new Contacto();
		$cont->registrarUsuario($_POST['cont_curp'],$_POST['cont_pas'],$_POST['cont_nom'],$_POST['cont_apa'],$_POST['cont_ama'],$_POST['cont_tel'],$_POST['cont_dir']);;
		echo "<script> window.location.href='../pages/MenuAdmin.php'; </script>";
	}
//SI COD = 5 ES REGISTRO DE ALUMNO
}if (isset($_REQUEST['cod']) == 5){
	if (isset($_REQUEST['regAlu']) ){
		$alu = new Alumno();
		$fecha = new DateTime($_POST['alu_nac']);
		$nFecha =  $fecha->format('Y-m-d');
		$alu->registrarAlumno($_POST['alu_nom'],$_POST['alu_apa'],$_POST['alu_ama'],$_POST['alu_gra'],$_POST['alu_gru'],$_POST['alu_curp'],$_POST['alu_gen'],$_POST['alu_nal'],$_POST['alu_cal'],$_POST['alu_col'],$_POST['alu_mun'],$_POST['alu_cor'],$_POST['alu_est'],$_POST['alu_pes'],$_POST['alu_sgr'],$nFecha,$_SESSION['user']);
	}
//SI COD = 6 ES REGISTRO DE HISTORIA MEDICA
}if (isset($_REQUEST['cod']) == 6){
	if (isset($_REQUEST['regHme']) ){

		//HISTORIA MEDICA
		$hme = new Historia();
		$hme->registrarHme($_SESSION['curp_alu'],$_POST['hme_insmed'],$_POST['hme_nom'],$_POST['hme_tel']);

		//Padecimientos Presentados
		$pad = new Padecimiento(); 
		for ($i=1; $i <= 12; $i++) { 
			if (checar($_POST[$i])){
				$array[] = $i;
			}
		}
		$pad->usu_Pad($_SESSION['curp_alu'],$array);

		//Observaciones Presentadas
		$obs = new Observacion();
		for ($i=50; $i <= 61; $i++) { 
			if (checar($_POST[$i])){
				$arrayO[] = $i;
				$j++;
			}
		}
		$obs->usu_Obs($_SESSION['curp_alu'],$arrayO);
	}
//SI COD = 7 ES PARA APARECER LOS DATOS DEL USUARIO A MODIFICAR
}if (isset($_REQUEST['cod']) == 7){
	if (isset($_REQUEST['curp_mod'])){
		$_SESSION['mod_cont'] = $_REQUEST['curp_mod'];
		echo "<script> window.location.href='../pages/modificar_usuario.php'; </script> ";
	}
//SI COD = 8 ES ELIMINACION DE USUARIO
}if (isset($_REQUEST['cod']) == 8){
	if (isset($_REQUEST['curp_eli'])){
		$cont = new Contacto();
		$cont->eliminar($_REQUEST['curp_eli']);
	}
//SI COD = 9 ES APARECER LOS DATOS DEL ALUMNO A MODIFICAR
}if (isset($_REQUEST['cod']) == 9){
	if (isset($_REQUEST['alu_mod'])){
		$_SESSION['modd_alu'] = $_REQUEST['alu_mod'];
		echo "<script> window.location.href='../pages/modificar_alumno.php'; </script> ";
	}

//SI COD = 10 ES ELIMINAR ALUMNO DESDE ADMINISTRADOR
}if (isset($_REQUEST['cod']) == 10){
	if (isset($_REQUEST['alu_eli'])){
		$alu = new Alumno();
		$alu->eliminar($_REQUEST['alu_eli']);
	}
//SI COD = 11 ES PARA MODIFICAR AL USUARIO
}if (isset($_REQUEST['cod'])==11){
	if(isset($_REQUEST['mod_usr'])){
		$cont = new Contacto();
		$cont->modificarUsuario($_SESSION['mod_cont'],$_POST['cont_pas'],$_POST['cont_nom'],$_POST['cont_apa'],$_POST['cont_ama'],$_POST['cont_tel'],$_POST['cont_dir']);;
		//echo "<script> window.location.href='../pages/MenuAdmin.php'; </script>";
	}
//SI COD = 12 ES PARA MODIFICAR ALUMNO
}if (isset($_REQUEST['cod']) == 12){
	if (isset($_REQUEST['modAluu']) ){
		$alu = new Alumno();
		$fecha = new DateTime($_POST['alu_nac']);
		$nFecha =  $fecha->format('Y-m-d');
		$alu->modificarAlumno($_POST['alu_nom'],$_POST['alu_apa'],$_POST['alu_ama'],$_POST['alu_gra'],$_POST['alu_gru'],$_SESSION['modd_alu'],$_POST['alu_gen'],$_POST['alu_nal'],$_POST['alu_cal'],$_POST['alu_col'],$_POST['alu_mun'],$_POST['alu_cor'],$_POST['alu_est'],$_POST['alu_pes'],$_POST['alu_sgr'],$nFecha);
	}
//SI COD = 13 ES PARA MOSTRAR DATOS DEL ALUMNO
}if (isset($_REQUEST['cod']) == 13){
	if (isset($_REQUEST['most_alu'])){
		$_SESSION['most_alum'] = $_POST['alu_curp'];
		echo "<script> window.location.href='../pages/imprime_datos.php'; </script>";
	}
}


function checar($variable){
	if ($variable == 'SI' || $variable == 'si'){
		return  true;
	}else{
		return false;
	}
}

?>   