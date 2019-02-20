<?php
session_start();
if (isset($_SESSION['user'])) {
	require_once("../clases/contacto.php");
	$cont = new Contacto();
	$cont->mostrar($_SESSION['user']);
}else{
	header("Location: ../../EscuelaFinal");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/flare/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 16:01:38 GMT -->
<head>
  <?php require_once 'complements/head.php'; ?>

  <title>Control Escolar</title>
  
</head>

<body>
   <div class="container-scroller">
  <br> <br> 
  

      <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
   <?php require_once("complements/header.php"); ?>
	 <div id="ContenidoMenu" class="card ">
    <div class="card-body">
      <div class="card-title text-center display-4"> Bienvenido (a) <?php echo $cont->cont_nom." ".$cont->cont_apa." ".$cont->cont_ama;?></div>
      <br>
      <div class="row">
        <div class="col-md-2">
          <a href="registro_alumno.php" class="btn btn-outline-success  btn-block ">  Registrar Alumno  </a> <br>          
        </div>       
      </div>
      <div class="row mt-5">
        <div class="col-md-2">
          <a href="" class="btn btn-outline-success btn-block "> Calendario Escolar </a>   </div> 
           <div class="offset-md-6 col-md-4">
            <h4>La escuela <b> Primaria...</b><br> Te da la bienvenida al ciclo escolar </h4>
          
          </div>

      </div> 

      <div class="row mt-5">
         <div class="col-md-2">
          <a href="consulta_registros.php" class="btn btn-outline-success btn-block ">Consulta Registros </a>        
        </div> 
         <div class="offset-md-6 col-md-4">
            <h2 class="text-center"> <b>2019 - 2020</b></h2>
          
          </div>    
      </div>
      <br>    
    </div>        
  </div>
</div> 
</div>
</div>
</div>
  <?php require_once ('complements/script.php') ?>
</body>
</html>