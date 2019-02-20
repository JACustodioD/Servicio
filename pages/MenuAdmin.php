<?php
session_start();
if (isset($_SESSION['admin'])) {
  require_once("../clases/admin.php");
  require_once '../clases/contacto.php';
  $adm = new Admin();
  $cont = new Contacto();
  $adm->mostrar($_SESSION['admin']);
}else{
  header("Location: ../../EscuelaFinal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once("complements/head.php"); ?>
  <title>Control Escolar</title>
</head>

<body>
  <?php require_once("complements/header1.php");?>
 <br> <br> <br> <br> <br> <br> 
   <h1 class="text-center "> Bienvenido (a) <?php echo $adm->adm_usr; ?></h1>
       
    <div class="container-fluid mt-5">
      <a href="registro_usuario.php">  </a>
      <table class="table border-danger " border="2">
        <thead>
          <tr>
            <th>Curp</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Número telefono</th>
            <th>Dirección</th>
            <th ></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
              <?php $cont->mostrarTabla();?>
     </table>

    </div>            
       
  </tbody>
  </table>
  </div>
  <script type="text/javascript">
  </script>
  </body>   
</html>