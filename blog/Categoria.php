<?php
include('validaradmin.php')
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
    ?>
    <div class="container" style="justify-content: center;">
        <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="../blog/index.php">
                <h1>Categorias</h1>
            </a>
        </div>
        <div class="row" style="justify-content: center;">
            <div class="col-sm-6 col-md-6" style="margin-top: 5%;">
                <form class="shadow-lg bg-white mb-5" style="padding: 20px; border-radius:20px;" action="../databases/RegistroCategoria.php" method="POST">
                    <h2 class="text-center mb-2">Registro de categoria</h2>
                    <div class="mb-3">
                        <input type="hidden" name="ruta" value="<?php echo basename(__FILE__); ?>">
                        <label for="categoria" class="form-label">Nombre de la categoria</label>
                        <input type="text" class="form-control" name="categoria" id="categoria" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>