<?php
session_start();
// evaluamos si ela variable sesion existe
if (isset($_SESSION["usuario"])) {
} else {
  // si la sesion no existe se dirige al index
  header("Location:../index.php ");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Categoria</title>
  <!-- <link href="../css/blog.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body style="background: linear-gradient(to right,#5695EC ,#3BEEAF);">
  <?php
  include('menu.php');
  include('../databases/conexion.php');
  ?>
  <div class="container">
    <div  class="row row-cols-1 row-cols-md-2 g-2" style="justify-content: center; margin-top:2%;">
      <?php
      $consulta = $conexion->query("SELECT * FROM blog INNER JOIN usuario ON  blog.id_usuario = usuario.id_usuario ");
      while ($row = $consulta->fetch_assoc()) {
      ?>
        <div class="">
          <div class="card text-center">
            <div class="card-header">
              <?php
              $rowcat = $row['id_categoria'];
              $consiltacat=  $conexion->query("SELECT * FROM categoria WHERE id_categoria ='$rowcat'");
              while($dtcat = $consiltacat->fetch_assoc()){
                echo $dtcat["descripcion"];
              }
              ?>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["titulo"] ?></h5>
              <p class="card-text">Autor: <?php echo $row["descripcion"] ?></p>
              <a href="verblog.php?id=<?php echo $row["id_blog"] ?>" class="btn btn-primary">Ver Blog</a>
              <a href="editarblock.php" class="btn btn-success">Editar Blog</a>
            </div>
            <div class="card-footer text-muted">
            <?php echo $row["fecha_creacion"] ?>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>