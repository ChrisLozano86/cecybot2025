<?php
require_once '../../class/Registro.php';
$id = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : null;

    if($id){        
        $registro = Registro::buscarPorId($id);   
          
    }else{
        $registro = new Registro(); 
       
    }

   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $nombre_equipo = (isset($_POST['nombre_equipo'])) ? $_POST['nombre_equipo'] : null;
      $url_imagen1 = (isset($_REQUEST['url_imagen1'])) ? $_REQUEST['url_imagen1'] : null;  
      $url_imagen2 = (isset($_REQUEST['url_imagen2'])) ? $_REQUEST['url_imagen2'] : null;      
      $coach = (isset($_POST['coach'])) ? $_POST['coach'] : null;
      $integrante1 = (isset($_REQUEST['integrante1'])) ? $_REQUEST['integrante1'] : null;
      $integrante2 = (isset($_POST['integrante2'])) ? $_POST['integrante2'] : null;
      $integrante3 = (isset($_POST['integrante3'])) ? $_POST['integrante3'] : null;
      $categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : null;
      $institucion = (isset($_POST['institucion'])) ? $_POST['institucion'] : null;
      $email = (isset($_POST['email'])) ? $_POST['email'] : null;
      $tel = (isset($_POST['tel'])) ? $_POST['tel'] : null;
      $url_comprobante = (isset($_REQUEST['url_comprobante'])) ? $_REQUEST['url_comprobante'] : null; 
      $url_qr = (isset($_REQUEST['url_qr'])) ? $_REQUEST['url_qr'] : null; 
     
            $registro->setNombreEquipo($nombre_equipo);
            $registro->setcoach($coach);
            $registro->setintegrante1($integrante1);
            $registro->setintegrante2($integrante2);
            $registro->setintegrante3($integrante3);
            $registro->setCategoria($categoria);
            $registro->setInstitucion($institucion);
            $registro->setEmail($email);
            $registro->setTel($tel);
            
           

             
             $rutaServidorLogos = 'uploads/logos';
             $rutaServidorComprobantes = 'uploads/comprobantes';
            
             
            if ($_FILES['url_img']['name']!=null) {
    
                    if (!is_dir('uploads/logos')) {
                      mkdir('uploads/logos', 0777, true); 
                    }
                   
                    $rutaTemporal = $_FILES['url_img']['tmp_name'];
                    $extension = pathinfo($_FILES['url_img']['name'], PATHINFO_EXTENSION);
                    $nombre_equipoImagen = 'logo_'. $nombre_equipo .'_'.date('YmdHis').'.'.$extension;
                    $rutaDestino = $rutaServidorLogos.'/'.$nombre_equipoImagen;
                    unlink($url_imagen1);
                    move_uploaded_file($rutaTemporal, $rutaDestino); 
                    $registro->setUrlImagen($rutaDestino); 
                  
              } else{
              $registro->setUrlImagen($url_imagen1);    
            } 


            if ($_FILES['url_pago']['name']!=null) {
    
              if (!is_dir('uploads/comprobantes')) {
                mkdir('uploads/comprobantes', 0777, true); 
              }
             
              $rutaTemporal = $_FILES['url_pago']['tmp_name'];
              $extension = pathinfo($_FILES['url_pago']['name'], PATHINFO_EXTENSION);
              $nombre_equipoComprobante = 'comprobante_'. $nombre_equipo .'_'.date('YmdHis').'.'.$extension;
              $rutaDestino = $rutaServidorComprobantes.'/'.$nombre_equipoComprobante;
              unlink($url_imagen2);
              move_uploaded_file($rutaTemporal, $rutaDestino); 
              $registro->setUrlComprobante($rutaDestino); 
            
        } else{
        $registro->setUrlComprobante($url_imagen2);    
      } 

            
              $registro->guardar();
              header('Location: index.php');
              
            
    }
      
    include_once '../../assets/template/header.php';
?>


<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
          <a href="index.php" class="btn btn-warning">Regresar</a><br>
          
          <?php 
          if (isset($_REQUEST['id'])){
            
            $title = 'Información de Registro <br> <strong> '.$registro->getNombreEquipo() .'</strong>';
            $date = date("d/m/Y", strtotime($registro->getFechaRegistro()));
          }else{
            $title = 'Registrar Nuevo Equipo';
          }
          ?>


          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">

          <h4 class="text-center"><?php echo $title ?></h4> <br>
      

            <form action="save.php" method="post" id="registro_form" enctype="multipart/form-data">

            <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $registro->getId(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="url_imagen1" id="url_imagen1" value="<?php echo $registro->getUrlImagen(); ?>">
            <input class="form-control" type="hidden" name="url_imagen2" id="url_imagen2" value="<?php echo $registro->getUrlComprobante(); ?>">
            </div>

            <div class="form-group">
            <label for="url_img">Logo del equipo 
               </label>
            <?php    if(isset($_REQUEST['id'])): ?>
              </br>
            <img src="<?= $registro->getUrlImagen(); ?>" style="width:100px" />
            </br></br>
            <?php endif; ?>
            <input type="file" class="form-control-file" name="url_img" id="url_img" <?php if($registro->getId()==""){ echo 'required'; }?> >
            </div>


            <div class="form-group">
            <label for="titulo">Nombre del equipo</label>
            <input class="form-control" type="text" name="nombre_equipo" id="nombre_equipo" value="<?php echo $registro->getNombreEquipo(); ?>">
            </div>

            <div class="form-group">
            <label for="contenido">Coach</label>
            <input class="form-control" type="text" name="coach" id="coach" value="<?php echo $registro->getCoach(); ?>">
            </div>  

            <div class="form-group">
            <label for="contenido">Integrante 1</label>
            <input class="form-control" type="text" name="integrante1" id="integrante1" value="<?php echo $registro->getIntegrante1(); ?>">
            </div>  

            <div class="form-group">
            <label for="integrante2">integrante 2</label>
            <input class="form-control" type="text" name="integrante2" id="integrante2" value="<?php echo $registro->getIntegrante2(); ?>">
            </div>

            
            <div class="form-group">
            <label for="integrante2">Integrante 3</label>
            <input class="form-control" type="text" name="integrante3" id="integrante3"  value="<?php echo $registro->getIntegrante3(); ?>">
            </div>

            <div class="form-group">
              <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control" style="width: 50%;">
            <option value="">SELECCIONA UNA CATEGORÍA</option>
              <option value="MINI SUMO RC" <?php if($registro->getCategoria()=='MINI SUMO RC'){echo 'selected';}?>>MINI SUMO RC</option>
              <option value="ROBOT SOCCER" <?php if($registro->getCategoria()=='ROBOT SOCCER'){echo 'selected';}?>>ROBOT SOCCER</option>
              <option value="SEGUIDOR DE LINEA EDUCATIVO" <?php if($registro->getCategoria()=='SEGUIDOR DE LINEA EDUCATIVO'){echo 'selected';}?>>SEGUIDOR DE LINEA EDUCATIVO</option>
              <option value="SEGUIDOR DE LINEA LIBRE" <?php if($registro->getCategoria()=='SEGUIDOR DE LINEA LIBRE'){echo 'selected';}?>>SEGUIDOR DE LINEA LIBRE</option>
            </select> 
            </div>

            <div class="form-group">
            <label for="institucion">Institución que representa</label>
            <input class="form-control" type="text" name="institucion" id="institucion"  value="<?php echo $registro->getInstitucion(); ?>">
            </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email"  value="<?php echo $registro->getEmail(); ?>">
            </div>

            <div class="form-group">
            <label for="tel">Número de contacto</label>
            <input class="form-control" type="text" name="tel" id="tel"  value="<?php echo $registro->getTel(); ?>">
            </div>

            <div class="form-group">
            <label for="url_pago">Comprobante de pago
               </label>
            <?php    if(isset($_REQUEST['id'])): ?>
              </br>
            <img src="<?= $registro->getUrlComprobante(); ?>" style="width:100px" />
            </br></br>
            <?php endif; ?>
            <input type="file" class="form-control-file" name="url_pago" id="url_pago" <?php if($registro->getUrlComprobante()==""){ echo 'required'; }?> >
            </div>

            <div class="form-group">
            <label for="integrante2">Fecha de registro</label>
            <input class="form-control" type="text" name="fecha_registro" id="fecha_registro"  value="<?php if($registro->getFechaRegistro()!= ""){ echo $date; }?>">
            </div>

            <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Guardar registros">
            </div>  
           
            </form>
           
          
          </div>
          </div>
          <!-- /.col -->
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <?php
    
    include_once '../../assets/template/footer.php';
?>