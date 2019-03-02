<?php
session_start();
if (isset($_SESSION['user'])) {
  require_once("../clases/contacto.php");
}else{
  header("Location: loginUser.php");
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <?php require_once("complements/head.php") ?>
  <title>Datos del Alumno</title>

</head>

<body>
  <div class="container-scroller">

    <?php require_once('complements/header.php');?>

  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="col-12 grid-margin">
        <div class="card mt-5">
          <div class="card-body">
            <h2 class="text-center"> <b> DATOS DEL ALUMNO </b> </h2>
            <div class="card bordeForm">
              <div class="card-body ">
                  <form class="form-sample" action="../settings/proceso.php?cod=5" method="POST">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>CURP:</label>
                          <input type="text" class="form-control" name="alu_curp" required="required">    
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
                          <input  type="text"  class="form-control" name="alu_nom" required="required"/>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Apellido paterno:</label>
                          <input  type="text" class="form-control" name="alu_apa" required="required"/>
                        </div>
                      </div>
                      <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Apellido materno:</label>                                   
                                      <input  type="text" class="form-control" name="alu_ama" required="required"/>                             
                                  </div>
                                </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Genero:</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="alu_gen">
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                              <option value="Indefinido">Indefinido</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Fecha de nacimiento:</label>   
                          <input type="date" class="form-control" name="alu_nac" required="required">         
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
                                   <input  type="text"  class="form-control" name="alu_cal" required="required"/>
                                          
                              </div>                                    
                          </div>
                          <div class="col-md-4">
                             <div class="form-group ">
                                 <label>Colonia:</label>                                  
                                  <input  type="text"  class="form-control" name="alu_col" required="required"/>
                                           
                             </div>                                    
                          </div>  
                          <div class="col-md-4">
                              <div class="form-group ">
                                  <label>Municipio / Delegación: </label>                                   
                                  <input  type="text"  class="form-control" name="alu_mun" required="required"/>
                                           
                              </div>                                    
                          </div>                                     
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> E-mail: </label>
                                    <input type="text" class="form-control" placeholder="nombre@ejemplo.com" name="alu_cor" required="required">
                                    
                                </div>
                                  
                            </div>
                            <br>                                
                            <div class=" col-md-4">
                                <div class="form-group">
                                  <label class="ml-5">Grado al que se inscribe:</label>
                                  
                                  <select class="form-control w-50 ml-5" name="alu_gru">
                                    <option value=""> Seleccione</option>
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                    <option value="5"> 5</option>
                                    <option value="6"> 6</option>                                 
                                  </select>
                               </div>                               
                           </div>
                           <div class=" col-md-4">
                               <div class="form-group">
                                  <label class="ml-5">Grupo al que se inscribe:</label>                                 
                                  <select class="form-control w-50 ml-5" name="alu_gra">
                                    <option value=""> Seleccione</option>
                                    <option value="A"> A</option>
                                    <option value="B"> B</option>
                                    <option value="C"> C</option>
                                  
                                    
                                  </select>
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
                                          <span class="input-group-text" id="inputGroup-sizing-default" required="required">Estatura</span>
                                        </div>
                                        <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default " placeholder="Ej: 1.60" name="alu_est" required="required">
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
                                        <input type="text" class="form-control w-50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default " placeholder="Ej: 53" name="alu_pes" required="required">
                                      </div>          
                                  </div>
                              </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label>Tipo de Sangre:</label>  
                                    <select class="form-control" name="alu_sgr">
                                        <option value="0">Seleccione</option>
                                        <option value="0+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="A+">A+</option>
                                        <option value="B">B-</option>
                                        <option value="B+">B+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="AB+">AB+</option>                                
                                    </select>                 
                                  </div>
                                </div>
                    </div>                 
                    <div class="row">
                            <div class="col-md-4 offset-md-4">        
                                 <input class="btn btn-block btn-outline-success mt-5 mb-3" type="submit" name="regAlu" value="Guardar">
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

  </body>


</html>
