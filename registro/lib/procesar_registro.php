<?php
session_start();
require_once '../../admin/class/Registro.php';
include 'qr/barcode.php';
$registro = new Registro(); 
$generator = new barcode_generator();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$nombre_equipo = (isset($_POST['nombre_equipo'])) ? $_POST['nombre_equipo'] : null;
$url_imagen1 = (isset($_REQUEST['url_imagen1'])) ? $_REQUEST['url_imagen1'] : null;  
$url_imagen2 = (isset($_REQUEST['url_imagen2'])) ? $_REQUEST['url_imagen2'] : null;      
$coach = (isset($_POST['coach'])) ? $_POST['coach'] : null;
$integrante1 = (isset($_REQUEST['integrante1'])) ? $_REQUEST['integrante1'] : null;
$integrante2 = (isset($_POST['integrante2'])) ? $_POST['integrante2'] : null;
$integrante3 = (isset($_POST['integrante3'])) ? $_POST['integrante3'] : null;
$categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : null;
$seleccionInstitucion = (isset($_POST['seleccionInstitucion'])) ? $_POST['seleccionInstitucion'] : null;
$unidadAcademica = (isset($_POST['unidadAcademica'])) ? $_POST['unidadAcademica'] : null;
$otraInstitucion = (isset($_POST['otraInstitucion'])) ? $_POST['otraInstitucion'] : null;
$email = (isset($_POST['email'])) ? $_POST['email'] : null;
$tel = (isset($_POST['tel'])) ? $_POST['tel'] : null;
$url_comprobante = (isset($_REQUEST['url_comprobante'])) ? $_REQUEST['url_comprobante'] : null; 
$url_qr = (isset($_REQUEST['url_qr'])) ? $_REQUEST['url_qr'] : null; 

if($unidadAcademica != ""){
$institucion =  "CECYTEG Plantel ".$unidadAcademica;
}else{
$institucion = $otraInstitucion;
}

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
              move_uploaded_file($rutaTemporal, '../../admin/modules/registros/'.$rutaDestino); 
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
        move_uploaded_file($rutaTemporal, '../../admin/modules/registros/'.$rutaDestino); 
        $registro->setUrlComprobante($rutaDestino); 
      
  } else{
  $registro->setUrlComprobante($url_imagen2);    
} 

/* Generate SVG markup and write to standard output. */
$data_qr = "Equipo ".$nombre_equipo;
$file_name_qr = $nombre_equipo.'.svg';
$url_qr = 'uploads/qr/'.$file_name_qr;
header('Content-Type: image/svg+xml');
$svg = $generator->render_svg('qr', $data_qr , '');
file_put_contents('../../admin/modules/registros/'.$url_qr, $svg);
$registro->setUrlQr($url_qr);
      
    $registro->guardar();

        
       

        header('Location: ../confirm.php');
        
      
}