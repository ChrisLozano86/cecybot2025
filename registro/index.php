<?php
require_once '../admin/class/Registro.php';
$registro = new Registro();   
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Registro | CECYBOT 2025</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Theme style -->
   <link rel="stylesheet" href="../admin/assets/css/adminlte.css">
<!-- jQuery -->
<script src="../admin/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>

function registrarUnidadAcademica(){

let valor = document.getElementById('institucionSeleccionada').value; //obtenemos el valor del select

console.log(valor);

if(valor == "1"){ // si es igual a 4 que significa "otro"
  document.getElementById('otraInstitucion').style.display = 'none';//si no lo volvemos a ocultar
  document.getElementById('unidadAcademica').style.display = 'block'; //mostramos el id que contiene el input
  
}else if(valor == "2"){
document.getElementById('unidadAcademica').style.display = 'none'; //mostramos el id que contiene el input
document.getElementById('otraInstitucion').style.display = 'block';//si no lo volvemos a ocultar

}else{
  document.getElementById('unidadAcademica').style.display = 'none'; 
  document.getElementById('otraInstitucion').style.display = 'none';
}

}

</script>

</head>
<body style="background-color: #005B97;">

<div class="container-fluid">
        <div class="row">
          <div class="col" >

          

        
          <div  style="width:80%; margin-left:10%; background-color: white; padding:20px; border-radius:10px;">

          <div style="height: 250px; width: 100%; background-color: #005B97; color: white;">

            <h1>Banner publicitario</h1>
          </div>

          <h1 class="text-center">REGISTRO DE EQUIPOS</h1> <br>
      
          <p>Los campos con <span class="text text-danger">*</span> son obligatorios.</p>
            <form action="lib/procesar_registro.php" method="post" id="registro_form" enctype="multipart/form-data" novalidate>

            <div class="form-group">
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $registro->getId(); ?>">
            </div>

            <div class="form-group">
            <input class="form-control" type="hidden" name="url_imagen1" id="url_imagen1" value="<?php echo $registro->getUrlImagen(); ?>">
            <input class="form-control" type="hidden" name="url_imagen2" id="url_imagen2" value="<?php echo $registro->getUrlComprobante(); ?>">
            </div>

            <div class="form-group">
            <label for="url_img">Logo del equipo </label>
            <input type="file" class="form-control-file" name="url_img" id="url_img">
            <small class="text-danger error-message" id="error-url_img"></small>
            </div>
            <div class="form-group">
            <label for="titulo">Nombre del equipo <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="nombre_equipo" id="nombre_equipo" value="">
            <small class="text-danger error-message" id="error-nombre_equipo"></small>
            </div>

            <div class="form-group">
            <label for="contenido">Coach <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="coach" id="coach" value="">
            <small class="text-danger error-message" id="error-coach"></small>
            </div>  

            <div class="form-group">
            <label for="contenido">Integrante 1 (Líder del Equipo) <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="integrante1" id="integrante1" value="">
            <small class="text-danger error-message" id="error-integrante1"></small>
            </div>  

            <div class="form-group">
            <label for="integrante2">Integrante 2</label>
            <input class="form-control" type="text" name="integrante2" id="integrante2" value="">
            </div>

            
            <div class="form-group">
            <label for="integrante2">Integrante 3</label>
            <input class="form-control" type="text" name="integrante3" id="integrante3"  value="">
            </div>

            <div class="form-group">
              <label for="categoria">Categoria <span class="text text-danger">*</span></label>
            <select name="categoria" id="categoria" class="form-control" style="width: 50%;">
            <option value="">Selecciona una categoría</option>
              <option value="MINI SUMO RC">Mini Sumo RC</option>
              <option value="ROBOT SOCCER">Robot Soccer</option>
              <option value="SEGUIDOR DE LINEA EDUCATIVO">Seguidor de Línea Educativo</option>
              <option value="SEGUIDOR DE LINEA PROFESIONAL">Seguidor de Línea Profesional</option>
            </select> 
            <small class="text-danger error-message" id="error-categoria"></small>
            </div>

            <div class="form-group">
            <label for="institucioninstitucionSeleccionada">Institución que representas <span class="text text-danger">*</span></label>
            <select class="form-control" name="institucionSeleccionada" id="institucionSeleccionada"  style="width: 50%;" onchange="registrarUnidadAcademica()">
                    <option value="">Selecciona una opción</option>
                    <option value="1" >Colegio de Estudios Cientificos y Tecnológicos del Estado de Guanajuato</option>
                    <option value="2" >Otra Institución</option>
                  </select>
            <small class="text-danger error-message" id="error-institucionSeleccionada"></small>     
            </div>

            <div class="form-group" style="display: none;" id="unidadAcademica">               
                  <input type="text" class="form-control"  name="unidadAcademica" placeholder="Plantel al que pertences" />
            </div>

            <div class="form-group" style="display: none;" id="otraInstitucion">               
                  <input type="text" class="form-control" name="otraInstitucion"  placeholder="Nombre de la Institución a la que pertences" />
            </div>
            <div class="form-group">
            <label for="email">Email <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="email" id="email"  value="">
            <small class="text-danger error-message" id="error-email"></small>
            </div>

            <div class="form-group">
            <label for="tel">Número de contacto <span class="text text-danger">*</span></label>
            <input class="form-control" type="text" name="tel" id="tel"  value="">
            <small class="text-danger error-message" id="error-tel"></small>
            </div>

            <div class="form-group">
            <label for="url_pago">Comprobante de pago <span class="text text-danger">*</span></label>
            <input type="file" class="form-control-file" name="url_pago" id="url_pago">
            <small class="text-danger error-message" id="error-url_pago"></small>
            </div>

            <div class="form-group">
            <input type="submit" class="btn btn-lg btn-primary" value="Registrar equipo">
            </div>  
           
            </form>
<!-- Validate -->
<script src="../admin/assets/js/registro_validate.js"></script> 
          </div>
          </div>
          <!-- /.col -->
        </div>
        </div>
</body>

</html>