<?php
require_once '../../class/Registro.php';
$registros = Registro::recuperarTodos(); 
include_once '../../assets/template/header.php';
?>

<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h3 class="text-center"> Registros de equipos </h3>
            
              <a href="../../../registro/index.php" class="btn btn-default btn-custom" > <i class="fas fa-plus"></i> Registrar nuevo Equipo </a><br><br>
              <a href="report.php" class="btn btn-default btn-custom"> <i class="fas fa-file-excel"></i> Descargar Excel </a><br><br>

              <br>
            

              <?php  
              
              if (count($registros) > 0): ?>

              <hr>

            <table class="table table-bordered" id="table-data" >
  <thead class="thead-dark">
    <tr class="text-center">
    
    <th scope="col">Logo</th>
      <th scope="col">Equipo</th>
      <th scope="col">Coach</th>
      <th scope="col">Categoría</th>
      <th scope="col">Email</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Comprobante Pago</th>
      <th scope="col">Fecha de registro</th>
      <th scope="col">Ver detalles</th>
      <th scope="col">Eliminar</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($registros as $item): ?>

 
    <tr>  
      <td> <img src="<?php echo $item['url_imagen']; ?>" width="120" height="150"></td>
      <td><?php echo $item['nombre_equipo']; ?></td>
      <td><?php echo $item['coach']; ?></td>
      <td><?php echo $item['categoria']; ?></td>
      <td><?php echo $item['email']; ?></td>
      <td><?php echo $item['tel']; ?></td>
      <td class="text-center"><a href="<?php echo $item['url_comprobante']; ?>" target="_blank" class="btn btn-success fas fa-check-square"></a></td>
      <td><?php echo date("d/m/Y", strtotime($item['fecha_registro'])); ?></td>
      <td class="text-center"><a href="save.php?id=<?php echo $item[0];?>" class="btn btn-info fas fa-edit"></a></td>
      <td class="text-center"><a href="delete.php?id=<?php echo $item[0];?>" onclick="return confirm('¿Está seguro que desea eliminar este registro?')" class="btn btn-danger far fa-trash-alt"></a></td> 
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<?php else: ?>
            <p class="alert alert-info"> No se encontraron Registros de Equipos </p>
        <?php endif; ?>
          
            
          </div>
          <!-- /.col -->
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