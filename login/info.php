<?php 
  ob_start();
  session_start();
  require_once 'templates/header.php';
  require_once './back/conexion.php';
  $user_id  = $_SESSION['user_id'];
?>
  
<div class="content">
  <div id="wrapper">
    <?php 
      try {
        $sql    = "SELECT * FROM user_perfil WHERE user_id=$user_id;";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0 ){

          while($row = mysqli_fetch_array($result)){

              $formartrabajo = $row['formadetrabajo'];

              //print($formartrabajo);

              $selectHtml =  '<option selected>Seleccionar Forma de Trabajo</option>
                                    <option  >Freelancer</option>
                                    <option >Despacho</option>
                                    <option >Empresa</option>';
              if ($formartrabajo =='Freelancer' ){
                $selectHtml =   '<option >Seleccionar Forma de Trabajo</option>
                                    <option selected>Freelancer</option>
                                    <option >Despacho</option>
                                    <option >Empresa</option>';
              }else if($formartrabajo == 'Despacho' ){
                  $selectHtml =   '<option >Seleccionar Forma de Trabajo</option>
                                    <option >Freelancer</option>
                                    <option selected>Despacho</option>
                                    <option >Empresa</option>';
              }else if($formartrabajo == 'Empresa' ){
                  $selectHtml =   '<option >Seleccionar Forma de Trabajo</option>
                                    <option >Freelancer</option>
                                    <option >Despacho</option>
                                    <option selected>Empresa</option>';
              }

              echo '
                <form method="post" action="back/insert_perfil.php" id="perfil_user">

                     <div class="form-group col-md-3">
                    
                    <img src="img/perfil.png" width="200px" name="imgperfil">
                    <label class="custom-file-label">Foto de Perfil</label>
                    <input type="file" class="custom-file-input" >
                    
                    </div>



                    <div class="form-group col-md-3">
                      <select class="form-control" name="formadetrabajo">
                        '.$selectHtml.'
                      </select>
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    
                    <input type="text" class="form-control" placeholder="Profesión" name="profesion"  class="required" value="'.$row['profesion'] .'">
                  </div>
                  <div class="form-group col-md-3">
                    
                    <input type="text" class="form-control" placeholder="Especialidad" name="especialidad" class="required" value="'.$row['especialidad'] .'">
                  </div>

                  <div class="form-group col-md-3">
                    
                    <input type="text" class="form-control" placeholder="Número de Contacto" name="ncontacto" value="'.$row['ncontacto'] .'">
                  </div>

                  <div class="form-group col-md-3">
                    
                    <input type="text" class="form-control" placeholder="$ Costo de Honorarios" name="costohonorarios" value="'.$row['costohonorarios'] .'">
                  </div>
                

                </div>



                
                <div class="form-group col-md-12">
                 
                  <input type="text" class="form-control" id="inputAddress" placeholder="Ubicación Geograficá" name="ubicaciongeo" value="'.$row['ubicaciongeo'] .'">
                </div>

                 <div class="form-group col-md-12">
                 
                  <input type="text" class="form-control" id="inputAddress" placeholder="Beneficios de tú Servicio" name="beneservicios" value="'.$row['beneservicios'] .'">
                </div>

                <div class="form-group col-md-12">
                 
                  <input type="text" class="form-control" id="inputAddress" placeholder="Ubicación de Sucursales" name="ubicasucursales" value="'.$row['ubicasucursales'] .'">
                </div>

               
                <div class="form-group">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Cuéntanos sobre tu experiencia laboral...." name="exlaboral" >'.$row['exlaboral'] .'</textarea>
                </div>
                  

                  <div class="form-row">
                  <div class="form-group col-md-3">
                    
                    <input type="text" class="form-control" placeholder="https://Perfil/Facebook/" name="cface" value="'.$row['cface'] .'">
                  </div>
                  <div class="form-group col-md-3">
                    
                    <input type="text" class="form-control" placeholder="https://Perfil/YouTube/" name="ctoutube" value="'.$row['ctoutube'] .'">
                  </div>

                  <div class="form-group col-md-3">
                    
                    <input type="text" class="form-control" placeholder="https://Perfil/Messenger/" name="cmessenger" value="'.$row['cmessenger'] .'">
                  </div>

                  <div class="form-group col-md-3">
                    
                    <input type="text" class="form-control" placeholder="https://Perfil/WhatsApp/" name="cwhatsapp" value="'.$row['cwhatsapp'].'">
                  </div>
                

                </div>
                
                 

                  

                  <div class="custom-file">
                  <label class="custom-file-label">Compartir Imagnes (4)</label>
                  <input type="file" class="custom-file-input" >
                  </div>

                  <div class="custom-file">
                  <label class="custom-file-label">Comparte Video ó gif</label>
                  <input type="file" class="custom-file-input" >
                  </div>

               
               

                <button type="submit" class="btn btn-primary">Actulizar</button>
              </form>
              ';
          }

        }else{
          echo '
            <form method="post" action="back/insert_perfil.php" id="perfil_user">

                 <div class="form-group col-md-3">
                
                <img src="img/perfil.png" width="200px" name="imgperfil">
                <label class="custom-file-label">Foto de Perfil</label>
                <input type="file" class="custom-file-input" >
                
                </div>



                <div class="form-group col-md-3">
               
                <select  class="form-control" name="formadetrabajo">
                 <option selected>Seleccionar Forma de Trabajo</option>
                  <option>Freelancer</option>
                   <option>Despacho</option>
                   <option>Empresa</option>
                </select>
              </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="Profesión" name="profesion" class="required">
              </div>
              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="Especialidad" class="required" name="especialidad">
              </div>

              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="Número de Contacto" name="ncontacto">
              </div>

              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="$ Costo de Honorarios" name="costohonorarios">
              </div>
            

            </div>



            
            <div class="form-group col-md-12">
             
              <input type="text" class="form-control" id="inputAddress" placeholder="Ubicación Geograficá" name="ubicaciongeo">
            </div>

             <div class="form-group col-md-12">
             
              <input type="text" class="form-control" id="inputAddress" placeholder="Beneficios de tú Servicio" name="beneservicios">
            </div>

            <div class="form-group col-md-12">
             
              <input type="text" class="form-control" id="inputAddress" placeholder="Ubicación de Sucursales" name="ubicasucursales">
            </div>

           
            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Cuéntanos sobre tu experiencia laboral...." name="exlaboral"></textarea>
            </div>
              

              <div class="form-row">
              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="https://Perfil/Facebook/" name="cface">
              </div>
              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="https://Perfil/YouTube/" name="ctoutube">
              </div>

              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="https://Perfil/Messenger/" name="cmessenger">
              </div>

              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="https://Perfil/WhatsApp/" name="cwhatsapp">
              </div>
            

            </div>
            
             

              

              <div class="custom-file">
              <label class="custom-file-label">Compartir Imagnes (4)</label>
              <input type="file" class="custom-file-input" >
              </div>

              <div class="custom-file">
              <label class="custom-file-label">Comparte Video ó gif</label>
              <input type="file" class="custom-file-input" >
              </div>

           
           

            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
          ';
        }
          
          

      } catch (Exception $e) {
          echo '
            <form method="post" action="back/insert_perfil.php" id="perfil_user">

                 <div class="form-group col-md-3">
                
                <img src="img/perfil.png" width="200px" name="imgperfil">
                <label class="custom-file-label">Foto de Perfil</label>
                <input type="file" class="custom-file-input" >
                
                </div>



                <div class="form-group col-md-3">
               
                <select  class="form-control" name="formadetrabajo">
                 <option selected>Seleccionar Forma de Trabajo</option>
                  <option>Freelancer</option>
                   <option>Despacho</option>
                   <option>Empresa</option>
                </select>
              </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="Profesión" name="profesion" class="required">
              </div>
              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="Especialidad" class="required" name="especialidad">
              </div>

              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="Número de Contacto" name="ncontacto">
              </div>

              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="$ Costo de Honorarios" name="costohonorarios">
              </div>
            

            </div>



            
            <div class="form-group col-md-12">
             
              <input type="text" class="form-control" id="inputAddress" placeholder="Ubicación Geograficá" name="ubicaciongeo">
            </div>

             <div class="form-group col-md-12">
             
              <input type="text" class="form-control" id="inputAddress" placeholder="Beneficios de tú Servicio" name="beneservicios">
            </div>

            <div class="form-group col-md-12">
             
              <input type="text" class="form-control" id="inputAddress" placeholder="Ubicación de Sucursales" name="ubicasucursales">
            </div>

           
            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Cuéntanos sobre tu experiencia laboral...." name="exlaboral"></textarea>
            </div>
              

              <div class="form-row">
              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="https://Perfil/Facebook/" name="cface">
              </div>
              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="https://Perfil/YouTube/" name="ctoutube">
              </div>

              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="https://Perfil/Messenger/" name="cmessenger">
              </div>

              <div class="form-group col-md-3">
                
                <input type="text" class="form-control" placeholder="https://Perfil/WhatsApp/" name="cwhatsapp">
              </div>
            

            </div>
            
             

              

              <div class="custom-file">
              <label class="custom-file-label">Compartir Imagnes (4)</label>
              <input type="file" class="custom-file-input" >
              </div>

              <div class="custom-file">
              <label class="custom-file-label">Comparte Video ó gif</label>
              <input type="file" class="custom-file-input" >
              </div>

           
           

            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
          ';
      } 
    ?>
	
    <?php require_once 'templates/sidebar.php';?>
        
  </div>
</div> <!-- /container -->
<?php require_once 'templates/footer.php';?>
	
<script type="text/javascript">
    $(function(){
        $('#perfil_user').validate({
          error: function(label) {
     $(this).addClass("error");
   },
            rules :{
                profesion : {
                    required : true
                 
                },
                especialidad:{
                  required : true
                 
                }
            },
            messages : {
                profesion : {
                    required : "Ingresa una Prefesión"
                 
                },
                especialidad : {
                    required : "Ingresa Especialidad"
                  
                },
                errorElement : 'span'
            }

        });    
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.js"></script>
