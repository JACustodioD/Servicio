  <?php
session_start();
if (isset($_SESSION['admin'])) {
  require_once("../clases/admin.php");
  require_once '../clases/alumno.php';
  //$adm = new Admin();
  $alu = new Alumno();
  //$adm->mostrar($_SESSION['adm']);
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
   <h1 class="text-center ">Control de Alumnos</h1>
 
   
    
    <div class="container-fluid mt-5">
      <a href="registro_usuario.php">  </a>
      <table class="table border-danger table-responsive" border="2">
        <thead>
          <tr>
            <th>Curp</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Grado</th>
            <th>Grupo</th>
            <th>Fecha de Nacimiento</th>
            <th>Genero</th>
            <th>Entidad</th>
            <th>Colonia</th>
            <th>Calle</th>
            <th>Municipio</th>
            <th>Correo</th>
            <th>Estatura</th>
            <th>Peso</th>
            <th>Sangre</th>
            <th>Tutor</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
              <?php $alu->mostrarTabla();?>
     </table>

    </div>            
       
  </tbody>
  </table>
  </div>
  <script type="text/javascript">
  </script>
  </body>   
</html>