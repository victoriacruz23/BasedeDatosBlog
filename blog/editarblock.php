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
    <title>Editar Blog</title>
    <!-- <link href="../css/blog.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>

<body>
    <?php
     include ('menu.php');
    ?>
    <div class="container">
        <?php
       
        include('../databases/conexion.php');
        $consulta = $conexion->query("SELECT * FROM blog INNER JOIN usuario ON  blog.id_usuario = usuario.id_usuario WHERE id_blog ='$blog_id' ");
        while ($row = $consulta->fetch_assoc()) {
            if ($_SESSION["usuario"]['id_usuario'] == $row['id_usuario']) {
        ?>
                <div class="row">
                    <div class="col-12">
                        <form action="../databases/updateblog.php" method="post" class="bg-white bg-opacity-75 shadow-lg p-3 mb-5 bg-body rounded">
                        <input type="hidden" name="id_blog" value="<?php echo $row["id_blog"]; ?>">    
                        <h4 class="text-center">Editar el blog <?php echo $row["titulo"]; ?></h4>
                        <h5 class="text-center"><a href="verblog.php?id=<?php echo $row["id_blog"]; ?>" class="btn btn-primary">Ver <?php echo $row["titulo"]; ?></a> </h5>
                            <div class="row mb-3">
                                <label for="categoria" class="col-sm-2 col-form-label">Categoria:  </label>
                                <div class="col-sm-10">
                                    <select class="form-select form-select-sm mb-3" id="categoria" name="categoria" aria-label=".form-select-sm example" style="font-size: 15px;" required>
                                        <option value="0">Elige una categoria</option>
                                        <?php
                                        $categoris = $conexion->query("SELECT * FROM categoria");
                                        while ($row1 = $categoris->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $row1["id_categoria"]; ?>"><?php echo $row1["descripcion"]; ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fecha" class="col-sm-2 col-form-label">Titulo:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" value="<?php echo $row["titulo"]; ?>" maxlength="20" id="Titulo" name="Titulo" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Descripcion" class="col-sm-2 col-form-label">Descripción: </label>
                                <div class="col-sm-10 form-floating">
                                    <textarea class="form-control form-control-sm" id="Descripción" name="Descripcion" maxlength="500" style="height: 150px;" required><?php echo $row["descripcion"]; ?></textarea>
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary" id="enviar">Editar</button>

                            </center>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <form action="../databases/registroimg.php" method="post" enctype="multipart/form-data" class="bg-white bg-opacity-75 shadow-lg p-3 mb-5 bg-body rounded">
                            <h4 class="text-center ">Insertar imagen en el blog </h4>
                            <div class="mb-3">
                                <input type="hidden" name="blog" value="<?php echo $row['id_blog']; ?>">
                                <label for="formFileSm" class="form-label">Selecciona imagen</label>
                                <input class="form-control form-control-sm" required name="img" id="formFileSm" type="file">
                            </div>
                            <center>
                                <input type="submit" value="Subir" class="btn btn-success">

                            </center>
                        </form>
                    </div>
                    <div class="col-6 bg-white bg-opacity-75 shadow-lg p-3 mb-3 bg-body rounded">
                        <h4 class="text-center">Imagenes del blog</h4>
                        <div class="table-responsive" style="max-height: 120px;  margin-bottom:30px;">
                            <table class="table table-light table-striped">
                                <thead>
                                    <tr>
                                        <th class="table-dark">Foto</th>
                                        <th class="table-dark">Nombre</th>
                                        <th class="table-dark">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody id="tbcate">
                                    <?php
                                    $consultacarr = $conexion->query("SELECT * FROM imagen WHERE id_blog = '$blog_id'");
                                    if ($consultacarr->num_rows != 0) {
                                        while ($row2 = $consultacarr->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td class=""><img src="../docs/img/<?php echo $row2['ruta']; ?>" alt="" height="20px" width="40px"></td>
                                                <td class=""><?php echo $row2['ruta']; ?></td>
                                                <td><a href="../databases/eliminarimg.php?idimg=<?php echo $row2['id_imagen']; ?>&iduser=<?php echo $blog_id; ?>&imgname=<?php echo $row2['ruta']; ?>" class="btn btn-danger">Eliminar</a></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


        <?php
            }
        }

        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>