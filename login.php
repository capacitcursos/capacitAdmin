<?php 
@session_start();
include('../conexion/conexion.php');

if(isset($_POST)){    
    if( $_POST['email'] != '' && $_POST['password'] != ''){
      $email = $_POST['email'];
      $password = md5($_POST['password']);

      $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
      $query = $connection->prepare($sql);
      $query->execute();
     
      if($query->rowCount() > 0) {

        foreach ($query->fetchAll() as $fila) {
           $_SESSION['logueado'] = 'logueado';
           $_SESSION['usuario_id'] = $fila['id'];
           $_SESSION['usuario'] = $fila['nombre'];
           $_SESSION['avatar'] = $fila['avatar'];
           header('Location: index.php');
        } 

      } else {
        $mensaje = '<p class="alert alert-danger">Los Datos son incorrectos! :( </p>';
      }




   }


}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>CAPACIT</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
              <span class="fa fa-envelope input-group-text"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
          </div>
        </div>
        <div class="row">         
          <!-- /.col -->
          <div class="col-8">
            <button type="submit" class="btn btn-primary btn-block btn-flat btn-lg">Iniciar Sesión</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>

</body>
</html>
