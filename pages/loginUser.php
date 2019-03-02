<?php
session_start();
if (isset($_SESSION['user'])) {
	header("Location: Menu.php");
}else{

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once("complements/head.php"); ?>
  <title>Control Escolar</title>
</head>

<body>
 <?php require_once("complements/headerN.php"); ?>
 <div class="container-scroller">
  	<div class="container-fluid">	    
  	    <div class="main-panel">
  	    	<center>
  	        <div class="card" id="cuerpoLogin">
  	        	<div class="card-body">	           	
	     		<center>
	     			<br> <br>
					<h2><b>Inicio de Sesión </b> </h2>
					  	<div class="card-body">
					    	<h6 class="card-title">Ingresa tu CURP y Contraseña</h6>
					    	<form action="../settings/proceso.php?cod=2" method="POST">
					    	     <input class="CajaIS" id="curp" type="text" maxlength="20" placeholder="Ingresa CURP" name="cont_curp" required="required">
					   			 <input  class="CajaIS"type="password" maxlength ="8" placeholder="Contraseña" name="cont_pas" required="required"> <span class="icon-key"></span><br><br>
					   			 <a href="registro_usuarioP.php"><p>¿No tiene cuenta? CLIC AQUI</p></a>
					   		 	  <input type="submit"  class="btn btn-success" name="logUser" value="Ingresar">
					    	</form>
					    </div>
				 </center>
			   </div>
			   </div>
			  </center>
		 </div>
	
 	</div>
 </div>
 
<?php require_once("complements/pages.php"); ?>

</body>
</html>