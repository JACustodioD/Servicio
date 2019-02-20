<?php
session_start();
if (isset($_SESSION['user'])) {
 if (isset($_SESSION['most_alum'])){
  require_once '../clases/alumno.php';
  require_once '../clases/padecimiento.php';
  require_once '../clases/observaciones.php';
  require_once '../clases/historia.php';

  $al = new Alumno();
  $obs = new Observacion();
  $pads = new Padecimiento();
  $hme = new Historia();

  $al->mostrar($_SESSION['most_alum']);
  $ob = $obs->mostrar($_SESSION['most_alum']);
  $pa = $pads->mostrar($_SESSION['most_alum']);
  $hme->mostrar($_SESSION['most_alum']);
 }
}else{
  header("Location: ../../EscuelaFinal");
}
?>
<!DOCTYPE html>
<html lang="es">


<head>
  <?php require_once 'complements/head.php'; ?>

  <title>Control Escolar</title>
  
</head>

<body>
  <div class="container-scroller">
      
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
           <?php require_once("complements/header.php");?>
        	<div  class="card ">
            <div class="card-body">
              <div class="card">
              <div class="row">
                <div class="col-md-1">              
                  <img src="../images/logo.jpg" width="100px;" height="100px;">               
                </div>
                <div class="col-md-10 mt-4 ml-5">              
                  <h2>Escuela Primaria "Nombre Escuela"</h2> <br> <p class="display-5 text-center">Datos del alumno</p>
                </div>
              </div>
            </div>
             <br>
              <div class="row">
                <div class="col-md-2">
                  <label>CURP:</label>               
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_curp; ?></label>
                </div>               
              </div>
              <div class="row">
                <div class="col-md-2">
                  <label>Nombre:</label>               
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_nom." ".$al->alu_apa." ".$al->alu_ama; ?></label>
                </div>               
              </div>
               <div class="row">
                <div class="col-md-2">
                  <label>Genero:</label>               
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_gen; ?></label>
                </div>                
              </div>
                <div class="row">
                <div class="col-md-2">
                 <label>Fecha de Nacimiento:</label>             
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_nac; ?></label>
                </div>                
              </div>
               <div class="row">
                <div class="col-md-2">
                 <label>Nacionalidad:</label>               
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_nal; ?></label>
                </div>                
              </div>
               <div class="row">
                <div class="col-md-2">
                 <label>Dirección:</label>               
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_cal." ".$al->alu_col; ?></label>
                </div>                
              </div>
               <div class="row">
                <div class="col-md-2">
                 <label>Municipio:</label>               
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_mun; ?></label>
                </div>                
              </div>
                <div class="row">
                <div class="col-md-2">
                 <label>Correo:</label>               
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_cor; ?></label>
                </div>             
              </div>
                <div class="row">
                <div class="col-md-2">
                 <label>Derechohabiencia:</label>               
                </div>
                <div class="col-md-6">
                   <label><?php echo $hme->hme_insmed; ?></label>
                </div>             
              </div>
               <div class="row">
                <div class="col-md-2">
                 <label>Grado:</label>               
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_gra; ?></label>
                </div>             
              </div>
              <div class="row">
                <div class="col-md-2">
                 <label>Grupo:</label>               
                </div>
                <div class="col-md-6">
                  <label><?php echo $al->alu_gru; ?></label>
                </div>             
              </div>
              
              <hr>
              <br>
                <h4><b>PADECIMIENTOS:</b></h4>
                <div class="row">
                  <?php 
                    foreach ($pa as $k) {
                    ?>
                    <div class="col-md-3">
                      <label>&#8226;<?php echo " ".$k['nombrePad'] ?> </label>               
                    </div>
                    <?php 
                    }

                  ?>
               
                        
              </div>

              <h4><b>OBSERVACIONES:</b></h4>
                <div class="row">
                <?php 
                    foreach ($ob as $k) {
                    ?>
                    <div class="col-md-3">
                      <label>&#8226;<?php echo " ".$k['nombreObs'] ?> </label>               
                    </div>
                    <?php 
                    }

                  ?>
              </div><br>
               <div class=" offset-10 col-md-2">
                 <button class="btn btn-success btn-block" onclick="imprimir();" id="imprime">Imprimir</button>
              </div>
            </div>        
          </div>
         </div> 
       </div>
    </div>
  </div>
  <?php require_once ('complements/script.php') ?>
   <script type="text/javascript">

    function imprimir(){
      document.getElementById("imprime").setAttribute("hidden","true");
      window.print();
      document.getElementById("imprime").removeAttribute("hidden");

    }
  </script>
</body>
</html>