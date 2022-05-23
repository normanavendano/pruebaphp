<?php
session_start();
$session  = isset($_SESSION['nombreuser'])?$_SESSION['nombreuser']:'';
$msj     = isset($_GET['msj'])?$_GET['msj']:'';
$msj_get_post     = isset($_GET['msj_get_post'])?$_GET['msj_get_post']:'';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Prueba</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-5">
      <form action="login.php" method="post">
        <h3>Variable POST</h3>
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control is-valid" name="email" id="email" required>

          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control is-valid" name="password" id="password" required>

          <div class="container text-center m-5">
            
              <?php 
              if ($session!='') {
                echo '<a  class="btn btn-danger" href="logout.php" >Cerrar Sesión</a>';
              }else{
                echo '<button class="btn btn-info">Ingresar</button>';
              }
              ?>
            
            <div class="card mt-5">
              <?php echo $msj_get_post ;?>
              <?php echo $session;?>
            </div>
            <!-- TODO: This is for server side, there is another version for browser defaults -->
          </div>
      </form>
    </div>

    <div class="container p-5">
      <form  method="get">
        <h3>Variable GET</h3>
          <label for="msj" class="form-label">Mensaje</label>
          <input type="text" class="form-control is-valid" name="msj" id="msj" required>
          <div class="container text-center m-5">
            <button class="btn btn-info">Enviar</button>
            <div class="card m-5">
            <?php echo $msj ;?>
            </div>
            <!-- TODO: This is for server side, there is another version for browser defaults -->
          </div>
      </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>