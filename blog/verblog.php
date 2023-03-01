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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

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
                <div class="col-12" style="max-height:800px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["titulo"] ?></h5>
                            <h6 class="card-title">Categoria: <?php
                                                                $rowcat = $row['id_categoria'];
                                                                $consiltacat =  $conexion->query("SELECT * FROM categoria WHERE id_categoria ='$rowcat'");
                                                                while ($dtcat = $consiltacat->fetch_assoc()) {
                                                                    echo $dtcat["descripcion"];
                                                                }
                                                                ?></h6>
                            <p class="card-text">Autor: <?php echo $row["username"] ?></p>
                            <p class="card-text">Descripcion :<?php echo $row["descripcion"] ?>.</p>
                            <p class="card-text"><small class="text-muted"><?php echo $row["fecha_creacion"] ?></small></p>
                            <?php
                            if ($_SESSION["usuario"]['id_usuario'] == $row['id_usuario']) {
                            ?>           
                            <p class="card-text"><a href="editarblock.php?id=<?php echo $row['id_blog'] ?>" class="btn btn-warning">Editar Blog</a> </p>
                            <?php
                            }
                            ?>           
                        </div>
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                $idcarr = $row['id_blog'];
                                $consultacarr = $conexion->query("SELECT * FROM imagen WHERE id_blog = '$idcarr'");
                                if ($consultacarr->num_rows != 0) {
                                    while ($row1 = $consultacarr->fetch_assoc()) {
                                ?>
                                        <div class="carousel-item active">
                                            <img src="../docs/img/<?php echo $row1['ruta']; ?>" height="400px" width="100%" class="d-block" alt="...">
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="carousel-item active">
                                        <img src="../img/vegeta.jpg" height="400px" width="100%" class="d-block" alt="...">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php
            }
?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>