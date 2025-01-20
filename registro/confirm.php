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
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registro completado</h5>
      </div>
      <div class="modal-body">
      <img src="../admin/assets/img/logo.png" class="d-block mx-auto w-50">
      <br>
      <p>El registro de su equipo se ha realizado correctamente y se ha enviado un correo electrónico con la información de su registro.</p>
      <p>¡Nos vemos el día de la competencia!</p>
      <hr>
     <p>Si tienes alguna duda, contactanos </p>
     <a href="index.php" class="btn btn-primary">Cerrar</a>
      </div>

    </div>
  </div>
</div>
  
<script>
  $( document ).ready(function() {
    $('#LoginModal').modal({backdrop: 'static', keyboard: false})
    $('#LoginModal').modal('toggle')


     
  });
  </script>
</body>

</html>

