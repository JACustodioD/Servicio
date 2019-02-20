<?php
session_start();
if (isset($_SESSION['user'])) {
  require_once("../clases/alumno.php");
  $al = new Alumno();
}else{
  header("Location: ../../EscuelaFinal");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once("complements/head.php"); ?>
  <title>Control Escolar</title>
</head>

<body>
  <?php require_once("complements/header.php");?>
  <br> <br> <br> <br> <br> <br> 
  <h1 class="text-center mt-5"> <b> Registros </b></h1>

  <div class="container">
    <div class="card">
      <div class="row tamañoCard">
       
       <form class="form-inline my-2 my-lg-0" method="POST" action="../settings/proceso.php?cod=13">
        <div class="col-md-12">
          <div class="form-group" >
             <button class="btn btn-success mr-4" type="submit" name="most_alu">Mostrar</button>
             
            <select id="tamSelect"  name="alu_curp">
              <?php  $al->mostrarNombre($_SESSION['user']); ?>
            </select>         
          </div>
        </div>
        <br>
        </form> 
        </div>
      </div>
   </div>  

</body>            
             
</html>