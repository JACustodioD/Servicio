<?php
session_start();
if (isset($_SESSION['user'])) {
}else{
  header("Location: ../../EscuelaFinal");
}
?>
<!DOCTYPE html>
<html lang="es">


<head>

 <?php require_once("complements/head.php"); ?>
 <title>Historia Medica</title>
</head>

<body>   
  <div class="container-scroller">

    <?php require_once 'complements/header.php'; ?>


    <div class="container-fluid page-body">
      <div class="main-panel">
       <center> <h2 class="card-title mt-4"> HISTORIA MEDICA</h2></center>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body bordeForm">
                  <form id="example-form" action="../settings/proceso.php?cod=6" method="POST">
                    <div>
                      <center><h3>Datos del Médico Familiar</h3></center>
                      <section>
                        <div class="form-row-inline">
                            <div class="card">
                            <div class="card-body ">
                                <div class="form-group row">
                                  <div class="col-md-8">
                                    <label>Nombre Medico:</label>
                                    <input class="form-control" onkeypress="return soloLetras"(event) name="hme_nom" required="required" placeholder="Nombre completo" />
                                  </div>
                                  <div class="col-md-4">
                                    <label>Telefono del medico:</label>
                                    <input class="form-control" onkeypress="return solonum"(event) required="required"/ name="hme_tel">
                                  </div>
                                 </div>
                                 <br>
                              <br>
                              <div class="form-group row">
                                <div class="col-md-12">
                                  <label> Institución de derechohabiencia: </label> <br>
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadioInline3" class="custom-control-input" name="hme_insmed" value="ISSEMyM">
                                      <label class="custom-control-label" for="customRadioInline3">ISSEMyM</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadioInline4" class="custom-control-input" name="hme_insmed" value="ISSSTE">
                                      <label class="custom-control-label" for="customRadioInline4">ISSSTE</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadioInline5" class="custom-control-input" name="hme_insmed" value="IMSS">
                                      <label class="custom-control-label" for="customRadioInline5">IMSS</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadioInline6" class="custom-control-input" name="hme_insmed" value="SEGURO POPULAR">
                                      <label class="custom-control-label" for="customRadioInline6">SEGURO POPULAR</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadioInline7" class="custom-control-input" name="hme_insmed" value="NINGUNO" checked="checked">
                                      <label class="custom-control-label" for="customRadioInline7">NINGUNO</label>
                                    </div>
                                </div>
                                
                              </div>
                              </div>
                            </div>
                          </div>

                      </section>
                      <br>
                       <center><h3>PADECIMIENTOS</h3> </center>
                      <section>
                        <table class="table table-striped rounded">
                       
                           <thead> <tr> <center> ¿Su hijo padece algunas de las siguientes enfermedades? </center></tr></thead> <br>
                         

                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" width="30%">PADECIMIENTO</th>
                                <th scope="col" width="5%">Si</th>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" width="30%"></th>
                                <th scope="col" width="5%">Si</th>
                                <th scope="col" width="5%">No</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Sobrepeso u Obesidad</th>
                                <td> <center> <input type="radio" name="1" value="si" required="required"></center></td>
                                <td> <center> <input type="radio" name="1" value="no" checked></center></td>
                                <th>Diabetes (azúcar en la sangre)</th>
                                <td> <center> <input type="radio" name="8" value="si"></center></td>
                                <td> <center> <input type="radio" name="8" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th scope="row">Enfermedades del corazón</th>
                                <td> <center> <input type="radio" name="2" value="si"></center></td>
                                <td> <center> <input type="radio" name="2" value="no" checked></center></td>
                                <th>Amigdalitis (anginas)</th>
                                <td> <center> <input type="radio" name="9" value="si"></center></td>
                                <td> <center> <input type="radio" name="9" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th scope="row">Bronquitis</th>
                                <td> <center> <input type="radio" name="3" value="si"></center></td>
                                <td> <center> <input type="radio" name="3" value="no" checked></center></td>
                                <th>Anemia</th>
                                <td> <center> <input type="radio" name="10" value="si"></center></td>
                                <td> <center> <input type="radio" name="10" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th scope="row">Hemorragias</th>
                                <td> <center> <input type="radio" name="4" value="si"></center></td>
                                <td> <center> <input type="radio" name="4" value="no" checked></center></td>
                                <th>Hepatitis</th>
                               <td> <center> <input type="radio" name="11" value="si"></center></td>
                               <td> <center> <input type="radio" name="11" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th scope="row">Epilepsia (ataques, convulsiones)</th>
                                <td> <center> <input type="radio" name="5" value="si"></center></td>
                                <td> <center> <input type="radio" name="5" value="no" checked></center></td>
                                <th>Neoplasis (tumores)</th>
                                <td> <center> <input type="radio" name="12" value="si"></center></td>
                                <td> <center> <input type="radio" name="12" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th scope="row">Fiebre Reumatica</th>
                                <td> <center> <input type="radio" name="6" value="si"></center></td>
                                <td> <center> <input type="radio" name="6" value="no" checked></center></td>
                                <th scope="row">Cancer</th>
                                <td> <center> <input type="radio" name="7" value="si"></center></td>
                                <td> <center> <input type="radio" name="7" value="no" checked></center></td>
                              </tr>
                            </tbody>
                          </table>
                      </section>
                      <br>
                    <center> <h3> OBSERVACIONES </h3> </center>
                      <section>
                        <table class="table table-bordered rounded">
                          <thead> <tr> <center>Ha detectado en el niño lo siguiente: </center> </tr></thead>
                            <br>
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" width="30%">PADECIMIENTO</th>
                                <th scope="col" width="5%">Si</th>
                                <th scope="col" width="5%">No</th>
                                <th scope="col" width="30%"></th>
                                <th scope="col" width="5%">Si</th>
                                <th scope="col" width="5%">No</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">¿Problemas para dormir?</th>
                                <td> <center> <input type="radio" name="50" value="si"></center></td>
                                <td> <center> <input type="radio" name="50" value="no" checked></center></td>
                                <th>¿Le da fiebre con frecuencia?</th>
                                <td> <center> <input type="radio" name="56" value="si"></center></td>
                                <td> <center> <input type="radio" name="56" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th scope="row">¿Le falta aire después de hacer ejercicio?</th>
                                <td> <center> <input type="radio" name="51" value="si"></center></td>
                                <td> <center> <input type="radio" name="51" value="no" checked></center></td>
                                <th>¿Es alergico a algún medicamento?</th>
                                <td> <center> <input type="radio" name="57" value="si"></center></td>
                                <td> <center> <input type="radio" name="57" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th scope="row">¿Presenta hemorragias (sangrados frecuentes)?</th>
                                <td> <center> <input type="radio" name="52" value="si"></center></td>
                                <td> <center> <input type="radio" name="52" value="no" checked></center></td>
                                <th>¿Presenta algún antecedente que le permita hacer ejercicio?</th>
                                <td> <center> <input type="radio" name="58" value="si"></center></td>
                                <td> <center> <input type="radio" name="58" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th scope="row">¿Le duelen las piernas por la noche?</th>
                                <td> <center> <input type="radio" name="53" value="si"></center></td>
                                <td> <center> <input type="radio" name="53" value="no" checked></center></td>
                                <th>¿Se desmaya con frecuencia?</th>
                                <td> <center> <input type="radio" name="59" value="si"></center></td>
                                <td> <center> <input type="radio" name="59" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th scope="row">¿Es alergico a algún alimento o bebida?</th>
                                <td> <center> <input type="radio" name="54" value="si"></center></td>
                                <td> <center> <input type="radio" name="54" value="no" checked></center></td>
                                <th>Ha recibido alguna vez transfución sanguinea?</th>
                                <td> <center> <input type="radio" name="60" value="si"></center></td>
                                <td> <center> <input type="radio" name="60" value="no" checked></center></td>
                              </tr>
                              <tr>
                                <th>Tiene impedimento para realizar deportes y/o actividades fisicas? </th>
                                <td> <center> <input type="radio" name="61" value="si"></center></td>
                                <td> <center> <input type="radio" name="61" value="no" checked></center></td>
                                <th scope="row">Ha sido intervenido quirurjicamente?</th>
                                <td> <center> <input type="radio" name="55" value="si"></center></td>
                                <td> <center> <input type="radio" name="55" value="no" checked></center></td>
                              </tr>
                            </tbody>
                          </table>
                          <br><br>
                           <div class="row">
                            <div class="col-md-4 offset-md-4">        
                                 <input class="btn btn-block btn-outline-success mt-5 mb-3" type="submit" name="regHme" value="Guardar">
                            </div>
                       </div>
                      </section>
                    </div>                  
                  </form>
                </div>
              </div>
          </div>
     
      </div>
    </div>
  
  </div>

  <?php require_once 'complements/script.php';?>
</body>


<!-- Mirrored from www.urbanui.com/flare/template/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 16:05:34 GMT -->
</html>
