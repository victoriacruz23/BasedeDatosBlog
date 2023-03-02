<?php
include('validaradmin.php');
include('../databases/conexion.php');
// if (empty($_GET['editar'])) {
//     header("Location: ../blog/index.php");
//     exit;
// } else {
//     $id = $_GET['editar'];
//     $consulta =  $conexion->query("SELECT * FROM usuario WHERE id_usuario= '$id'");
//     if ($consulta->num_rows == 1) {
//         while ($row = $consulta->fetch_assoc()) {
//             $nombre = $row['nombres'];
//             $username = $row['username'];
//             $direccion = $row['direccion'];
//         }
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro User</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(to right,#5695EC ,#3BEEAF);">
    <!-- contenedor principal -->
    <div class="container">
        <!-- contenedor de filas -->
        <div class="row" style="justify-content: center; margin-top:5%;">
            <!-- contendores de columnas -->
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
                <form action="../databases/editarUsuario.php" class="bg-white bg-opacity-75 shadow-lg p-3 mb-5 bg-body rounded" method="POST">
                    <center>
                        <img class="rounded-circle" width="100px" height="100px" src="https://utacapulco.edu.mx/images/logo-uta.png" alt="">
                    </center>
                    <!-- <input type="hidden" name="id" id="id" value="<?php echo $id;?>"> -->
                    <div class="mb-3">
                        <label for="entrada" class="form-label">Entrada No.</label>
                        <!-- <input type="text" class="form-control" name="entrda" id="entrada" value="<?php echo $nombre; ?>" required> -->
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Nickname</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $username; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Dirrección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $direccion; ?>" required>
                    </div>
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Ediar</button>
            </center>
          
            </form>
        </div>
    </div>
    </div>
    <!-- scripts  -->
    </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>