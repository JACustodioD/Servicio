<?php
session_start();
if (isset($_SESSION['admin'])) {
	header("Location: MenuAdmin.php");
}else{

}
?>
<!DOCTYPE html>
<html lang="es">


<head>
  <?php require_once("complements/head.php"); ?>
  <title>Control Escolar</title>
</head>

<body>
    <?php require_once("complements/headerN.php"); ?>
  	<div class="container-fluid  contenido">
  		<div class="main-panel">
  			<center>
  			<div class="card" id="cuerpoLogin">
  			  <div class="card-body">
	  			<div class="content-wrapper ">
			  		<br><br>			   
					  <h2> <b> Inicio de Sesión Administrativo </b> </h2>
					  <div id="CuerpoIS" class="card-body">
						    <h6 class="card-title">Ingresa tu Usuario y Contraseña</h6>
						    <form action="../settings/proceso.php?cod=1" method="POST">
						    	<input class="CajaIS"  type="text" maxlength="20" placeholder="Usuario" name="adm_usr">
						   		<input  class="CajaIS"type="password" maxlength ="8" placeholder="Password" name="adm_pas"> <span class="icon-key"></span><br><br>
						   		<input type="submit" id="BotonIS"  class="btn btn-success" name="logAdmin" value="Ingresar">
						    </form>
					  </div>
				    
				</div>
	         </div>
	      </div>
	  </center>
	    </div>
	</div>
 	
	<?php require_once("complements/script.php"); ?>
</body>
</html>