<!DOCTYPE html>
<html lang="es">



<head>

  <?php require_once 'complements/head.php';?>
  <title>Alta Usuarios</title>


</head>

<body>
  <div class="container-scroller">

    <?php require_once 'complements/header1.php'; ?>


     <div class=" container-fluid page-body">
        <div class="main-panel">
             <center><h2 class="card-title mt-5"> <b> REGISTRAR NUEVO USUARIO </b> </h2></center>
              <div id="contenidow">
                  <div class="col-12 grid-margin">
                    <div class="card">
                       <div class="card-body">
                          <div class="card">
                            <div class="card-body bordeForm">
                              
                            
                         
                           <form class="form-sample" action="../settings/proceso.php?cod=4" method="POST">

                        
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group ">
                                    <label>CURP:</label>
                                    
                                      <input type="text" class="form-control" name="cont_curp" />
                                   
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group"> <br>
                                    <a href="https://www.gob.mx/curp/" target="_blank" type="button" class="btn btn-outline-success " role = "button">Consulta CURP</a>                                    
                                  </div>
                                  
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label>Password:</label>
                                    <input type="Password" class="form-control" name="cont_pas" />
                                  </div>
                                </div>
                                </div>
                                <br>
                             
                                <div class="row">
                                  
                                
                                <div class="col-md-4">
                                  <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control" name="cont_nom" onkeypress="return onlyLetters(event);" onpaste="return false"/>
                                  </div>
                                </div>
                              
                             
                                <div class="col-md-4">
                                  <div class="form-group">
                                  <label>Apellido Paterno:</label>
                                  <input type="text" class=" form-control" name="cont_apa" onkeypress="return onlyLetters(event);" onpaste="return false"/>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                  <label>Apellido Materno:</label>
                                  <input class="form-control" name="cont_ama" />
                                 </div>
                                </div>
                              </div>
                              <br>

                              <div class="row">
                               <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Numero de telefono:</label>
                                    <input type="text" class="form-control" name="cont_tel" onkeypress="return onlyNumbers(event);" onpaste="return false">
                                   </div>
                                </div>
                                    
                                <div class="col-md-6">
                                  <div class="form-group">
                                  <label>Dirección:</label>
                                  <input type="text" placeholder="Calle, Numero, Colonia" class="form-control"  name="cont_dir" onkeypress="return soloLetras"(event)required="required"/>
                                  </div>
                               </div>
                                    </div>
                                  
                                    <div class="col-md-4 offset-md-4">
                                    <input class="btn btn-block btn-outline-success btn-lg" type="submit" name="regContac" value="Registrar">
                                    </div>
                                  </div>
                                </div>                                            
                              </div>
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
  </div>

  <?php require_once 'complements/script'; ?>
  </body>



</html>