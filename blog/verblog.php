<?php
session_start();
// evaluamos si ela variable sesion existe
if (isset($_SESSION["usuario"])) {
} else {
    // si la sesion no existe se dirige al index
    header("Location:../index.php ");
}
if (empty($_GET['id'])) {
    header("Location: ../blog/index.php");
    exit;
} else {
    $blog_id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Blog</title>
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
        <div class="row" style="justify-content: center; margin-top:2%;">

            <?php
            $consulta = $conexion->query("SELECT * FROM blog INNER JOIN usuario ON  blog.id_usuario = usuario.id_usuario WHERE id_blog ='$blog_id' ");
            while ($row = $consulta->fetch_assoc()) {
            ?>
                <div class="col-8">
                    <div class="card bg-dark text-white">
                        <img src="../img/vegeta.jpg" class="card-img" alt="...">
                        <!-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAADFBMVEWYmZuCg4WZmpxvcHGW7YJ5AAABTklEQVR4nO3QwQ3DMAwAMavef+cEfUW4FcgReO6w3TM/tnlPDl9Oykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJ/U/Y5txhuw874Aqpr4CHoAAAAABJRU5ErkJggg==" class="card-img" alt="..."> -->
                        <div class="card-img-overlay">
                            <h5 class="card-title"><?php echo $row["titulo"] ?></h5>
                            <h6 class="card-title">Categoria: <?php
                                                                $rowcat = $row['id_categoria'];
                                                                $consiltacat =  $conexion->query("SELECT * FROM categoria WHERE id_categoria ='$rowcat'");
                                                                while ($dtcat = $consiltacat->fetch_assoc()) {
                                                                    echo $dtcat["descripcion"];
                                                                }
                                                                ?></h6>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Autor: <?php echo $row["descripcion"] ?></p>
                            <p class="card-text"><?php echo $row["fecha_creacion"] ?></p>
                            <?php
                            if ($_SESSION["usuario"]['id_usuario'] == $row['id_usuario']) {
                            ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="formFileSm" class="form-label">Selecciona imagen</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    </div>
                                    <center>
                                        <input type="submit" value="Subir" class="btn btn-success">
                                    </center>
                                </form>
                            <?php
                            }
                            ?>
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