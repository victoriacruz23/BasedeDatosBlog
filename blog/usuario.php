<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body style="background: linear-gradient(to right,#5695EC ,#3BEEAF);">
    <div class="container" style="justify-content: center;">
    <div class="col-12 text-center">
        <a class="blog-header-logo text-dark" href="../blog/index.php"><h1>Usuarios</h1></a>
      </div>
        <div class="row" style="justify-content: center;">
            <div class="col-sm-6 col-md-6" style="margin-top: 5%;">
                <form class="shadow-lg bg-white mb-5" style="padding: 20px; border-radius:20px;"
                    action="../databases/RegistroUsuario.php" method="POST">
                       <h2 class="text-center mb-2">Registro de Usuario</h2>
                    <div class="mb-3">
                        
                        <label for="usurio" class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" name="usurio" id="usurio" required>
                    </div>
                    <div class="mb-3">
                        
                        <label for="usuario" class="form-label">Username</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Clave</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="verifica" class="form-label">Verificacion de Clave</label>
                        <input type="password" class="form-control" name="verifica" id="verifica" required>

                    </div>
                    <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" required>            
                    </div>

                    <center>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </center>


            </div>
        </div>
    </div>
    </form>

    </div>
    </div>
    </div>
    </div>

</body>

</html>