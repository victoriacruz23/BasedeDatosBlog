<?php
session_start();
// evaluamos si ela variable sesion existe
if (isset($_SESSION["usuario"])) {
    header("Location: blog/index.php ");  
}
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
                <form action="databases/RegistroUsuario.php" class="bg-white bg-opacity-75 shadow-lg p-3 mb-5 bg-body rounded" method="POST">
                    <center>
                        <img class="rounded-circle" width="100px" height="100px" src="https://utacapulco.edu.mx/images/logo-uta.png" alt="">
                    </center>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Nickname</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Dirrección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="verifica" class="form-label">Verificacion de Contraseña</label>
                        <input type="password" class="form-control" name="verifica" id="verifica" required>

                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </center>
                    <!-- crear cuenta -->
                    <center>
                        <a href="index.php" class="text-decoration-none text-dark">inicio de sesion</a>
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