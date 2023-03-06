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
    <div class="row bg-white mt-3 p-4" style="justify-content: center;">
      <div class="col-12">
        <form action="index.php" method="post">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <select class="btn btn-outline-secondary dropdown-toggle" id="categoriabus" name="categoriabus" aria-label=".form-select-sm example" style="font-size: 15px;" required>
                <option value="0">Elige una categoria</option>

                <?php
                include('../databases/conexion.php');
                $catebusc = $conexion->query("SELECT * FROM categoria");
                while ($rowcat = $catebusc->fetch_assoc()) {
                ?>
                  <option value="<?php echo $rowcat["id_categoria"]; ?>"><?php echo $rowcat["descripcion"]; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <input type="text" name="busqueda" class="form-control" style="margin-left: 3px;" placeholder="Escribe referencia" aria-label="Text input with dropdown button">
            <input type="submit" value="Buscar" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-2 g-2 p-3" style="justify-content: center; margin-top:2%;">
    <?php
    if (empty($_POST['busqueda']) and empty($_POST['categoriabus'])) {
      $consulta = $conexion->query("SELECT * FROM blog INNER JOIN usuario ON  blog.id_usuario = usuario.id_usuario ");
      // echo "cat bus no exiten";
      // exit;
    } else if (!empty($_POST["categoriabus"]) and !empty($_POST["busqueda"])) {
      $categoriabus = $_POST["categoriabus"];
      $busqueda = $_POST["busqueda"];
      $consulta = $conexion->query("SELECT * FROM blog INNER JOIN usuario ON  blog.id_usuario = usuario.id_usuario WHERE id_categoria LIKE '%" . $categoriabus . "%' OR titulo LIKE '%" . $busqueda . "%'");
      // echo "cat bus";
      // exit;
    } else if (!empty($_POST["categoriabus"]) and empty($_POST["busqueda"])) {
      $categoriabus = $_POST["categoriabus"];
      $consulta = $conexion->query("SELECT * FROM blog INNER JOIN usuario ON  blog.id_usuario = usuario.id_usuario WHERE id_categoria LIKE '%" . $categoriabus . "%'");
      // echo "cat";
      // exit;
    } else if (empty($_POST["categoriabus"]) and !empty($_POST["busqueda"])) {
      $busqueda = $_POST["busqueda"];
      $consulta = $conexion->query("SELECT * FROM blog INNER JOIN usuario ON  blog.id_usuario = usuario.id_usuario WHERE titulo LIKE '%" . $busqueda . "%'");
      // echo "bus";
      // exit;
    } else {
      $consulta = $conexion->query("SELECT * FROM blog INNER JOIN usuario ON  blog.id_usuario = usuario.id_usuario ");
    }
    while ($row = $consulta->fetch_assoc()) {
    ?>
      <div class="">
        <div class="card text-center" style="height: 400px;">
          <div class="card-header">
            <?php
            $rowcat = $row['id_categoria'];
            $consiltacat =  $conexion->query("SELECT * FROM categoria WHERE id_categoria ='$rowcat'");
            while ($dtcat = $consiltacat->fetch_assoc()) {
              echo $dtcat["descripcion"];
            }
            ?>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["titulo"] ?></h5>
            <p class="card-text">Autor: <?php echo $row["descripcion"] ?></p>
            <?php
            if ($_SESSION["usuario"]['id_usuario'] == $row['id_usuario']) {
            ?>
              <p class="card-text"><a href="editarblock.php?id=<?php echo $row['id_blog'] ?>" class="btn btn-warning">Editar Blog</a> </p>
            <?php
            }
            ?>
            <a href="verblog.php?id=<?php echo $row["id_blog"] ?>" class="btn btn-primary">Ver Blog</a>
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