<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'includes/nav.php'; ?>
  <!-- /.navbar -->
  
  <!-- aside -->
  <?php include 'includes/aside.php'; ?>
  <!-- /. aside -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-6">
          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              
              <form action="" method="POST" name="form">
                <div class="form-group col-md-12">
                    <label>Titulo</label>
                    <input type="text" name="titulo" required class="form-control">
                </div>
               

                <div class="form-group col-md-12">
                    <label>Descripcion Corta</label>
                    <textarea class="form-control" name="descripcion_corta"></textarea>
                </div>

                <div class="form-group col-md-12">
                    <label>Descripcion Detallada</label>
                    <textarea class="form-control" name="descripcion_detallada"></textarea>
                </div>

                <div class="form-group col-md-12">
                    <label>Requisitos</label>
                    <input type="text" name="requisitos" required class="form-control">
                </div>

                <div class="row">

                  <div class="form-group col-md-6">
                    <label>Certificado</label>
                    <input type="text" name="certificado" required class="form-control">
                  </div>

                  <div class="form-group col-md-6">
                      <label>Dias</label>
                      <input type="text" name="dias" required class="form-control">
                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Fecha de Inicio</label>
                    <input type="date" name="fecha_inicio" required class="form-control">
                  </div>
                
                  <div class="form-group col-md-6">
                      <label>Duración</label>
                      <input type="text" name="duracion" required class="form-control">
                  </div>
                </div>

                
                 <div class="row">
                   <div class="form-group col-md-6">
                    <label>Visible</label>
                    <select name="visible" class="form-control" required>
                        <option value="1">Mostrar</option>
                        <option value="0">No mostrar</option>
                    </select>
                 </div>


                 <div class="form-group col-md-6">
                    <label>Target</label>
                    <select name="target" class="form-control" required>
                        <option value="_parent">Misma pagina</option>
                        <option value="_blank">Pagina nueva</option>
                    </select>
                </div>
                 </div>


                <div class="form-group col-md-6">
                    <label>Imagen</label>
                    <input type="text" name="imagen"  class="form-control" id="imagen"  onclick="subir_imagen('imagen', 'sliders')">
                </div>


                <script>
                

                </script>

                <div class="col-md-2">
                        <br>
                       <button type="submit" name="guardar" value="guardar" class="btn btn-primary">Guardar</button> 
                </div>

            </form>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
