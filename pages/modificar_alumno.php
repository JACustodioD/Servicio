<?php
session_start();
if (isset($_SESSION['admin'])) {
  if (isset($_SESSION['modd_alu'])){
    require_once '../clases/alumno.php';
    $alu = new Alumno();
    $alu->mostrar($_SESSION['modd_alu']);
  }
}else{
  header("Location: alumno.php");
}
?>
<!DOCTYPE html>
<html lang="es">


<head>
  <?php require_once("complements/head.php") ?>
  <title>Historia Medica</title>

</head>

<body>
  <div class="container-scroller">
 
    <?php require_once('complements/header1.php');?>

  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="col-12 grid-margin">
        <div class="card mt-5">
          <div class="card-body">
            <h2 class="text-center"> DATOS DEL ALUMNO </h2>
            <div class="card bordeForm">
              <div class="card-body ">
                  <form class="form-sample" action="../settings/proceso.php?cod=12" method="POST">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>CURP:</label>
                          <input type="text" class="form-control" name="alu_curp" value="<?php echo $alu->alu_curp; ?>" disabled>    
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <br>
                          <a href="" class="btn btn-outline-success" role = "button" >CONSULTA CURP</a>
                        </div>     
                      </div>  
                    </div>    
                    <br>                      
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group ">
                          <label>Nombre (s):</label>
                          <input  type="text"  class="form-control" name="alu_nom" value="<?php echo $alu->alu_nom; ?>" />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Apellido paterno:</label>
                          <input  type="text" class="form-control" name="alu_apa" value="<?php echo $alu->alu_apa; ?>" />
                        </div>
                      </div>
                      <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Apellido materno:</label>                                   
                                      <input  type="text" class="form-control" name="alu_ama" value="<?php echo $alu->alu_ama; ?>"/>                             
                                  </div>
                                </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Genero:</label>
                          <div class="col-sm-9">
                            <input type="text"  class="form-control" name="alu_gen" value="<?php echo $alu->alu_gen; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Fecha de nacimiento:</label>   
                          <input type="date" class="form-control" name="alu_nac" value="<?php echo $alu->alu_nac; ?>">         
                        </div>
                      </div>
                      <div class="col-md-4">
                                <div class="form-group "> 
                                    <label>Nacionalidad:</label>
                                        <div class="col-sm-12">
                                          <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="alu_nal" class="custom-control-input" value="Mexicano" checked>
                                            <label class="custom-control-label" for="customRadioInline1">Mexicano</label>
                                           </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadioInline2" name="alu_nal" class="custom-control-input" value="Extranjero">
                                          <label class="custom-control-label" for="customRadioInline2">Extranjero</label>
                                        </div>
                                     </div>
                               </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">                                 
                          <div class="col-md-4">
                              <div class="form-group ">
                                  <label>Calle y numero:</label>                                      
                                   <input  type="text"  class="form-control" name="alu_cal" value="<?php echo $alu->alu_cal; ?>"/>
                                          
                              </div>                                    
                          </div>
                          <div class="col-md-4">
                             <div class="form-group ">
                                 <label>Colonia:</label>                                  
                                  <input  type="text"  class="form-control" name="alu_col" value="<?php echo $alu->alu_col; ?>"/>
                                           
                             </div>                                    
                          </div>  
                          <div class="col-md-4">
                              <div class="form-group ">
                                  <label>Municipio / Delegación: </label>                                   
                                  <input  type="text"  class="form-control" name="alu_mun" value="<?php echo $alu->alu_mun; ?>"/>
                                           
                              </div>                                    
                          </div>                                     
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> E-mail: </label>
                                    <input type="text" class="form-control" placeholder="nombre@ejemplo.com" name="alu_cor"value="<?php echo $alu->alu_cor; ?>">
                                    
                                </div>
                                  
                            </div>
                            <br>                                
                            <div class=" col-md-4">
                                <div class="form-group">
                                  <label class="ml-5">Grado al que se inscribe:</label>
                                  <input type="text"  class="form-control" name="alu_gru" value="<?php echo $alu->alu_gru; ?>">
                               </div>                               
                           </div>
                           <div class=" col-md-4">
                               <div class="form-group">
                                  <label class="ml-5">Grupo al que se inscribe:</label>  <input type="text"  class="form-control" name="alu_gra" value="<?php echo $alu->alu_gra; ?>">                               
                                 
                              </div>
                                
                           </div>             
                    </div>  
                    <br>
                    <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group ">
                                     <label>Altura:</label>
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-default">Estatura</span>
                                        </div>
                                        <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default " placeholder="Ej: 1.60" name="alu_est" value="<?php echo $alu->alu_est; ?>">
                                      </div>                                
                                  </div>
                              </div>
                               <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Peso:</label>
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-default">K.G.</span>
                                        </div>
                                        <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default " placeholder="Ej: 53" name="alu_pes" value="<?php echo $alu->alu_pes; ?>">
                                      </div>          
                                  </div>
                              </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Tipo de Sangre:</label>  
                                    <input type="text"  class="form-control" name="alu_sgr" value="<?php echo $alu->alu_sgr; ?>">
                                                
                                  </div>
                                </div>
                    </div>                 
                    <div class="row">
                            <div class="col-md-4 offset-md-4">        
                                 <input class="btn btn-block btn-outline-success mt-5 mb-3" type="submit" name="modAluu" value="Guardar">
                            </div>
                    </div>                                
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>



  <?php require_once("complements/script.php"); ?>
  <script src="letras.js"></script>
  <!-- End custom js for this page-->
  </body>


<!-- Mirrored from www.urbanui.com/flare/template/pages/forms/advanced_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 16:05:33 GMT -->
</html>
