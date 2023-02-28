<?php
include('validar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu nuevo block</title>
    <!-- <link href="../css/blog.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body style="background: linear-gradient(to right,#5695EC ,#3BEEAF);">
    <?php
    include('menu.php');
    ?>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4" style="justify-content: center;">
            <div class="col-lg-6 col-md-6 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <div class="grid text-justific" style="--bs-columns: 10; --bs-gap: 1rem;">
                        <h6 class="g-col-6 mb-4 text-center" style="font-size: 25px;">Crea tu block</h6>
                        <form action="../databases/RegistroBlog.php" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['usuario']['id_usuario']; ?>">
                                <label for="categoria" class="col-sm-2 col-form-label">Categoria:</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-select-sm mb-3" id="categoria" name="categoria" aria-label=".form-select-sm example" style="font-size: 15px;" required>
                                        <option selected>Elige una categoria</option>
                                        <?php
                                        include('../databases/conexion.php');
                                        $categoris = $conexion->query("SELECT * FROM categoria");
                                        while ($row = $categoris->fetch_assoc()) {
                                        ?>
                                         <option value="<?php echo $row["id_categoria"];?>" ><?php echo $row["descripcion"];?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fecha" class="col-sm-2 col-form-label">Titulo:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Titulo" name="Titulo" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Descripcion" class="col-sm-2 col-form-label">Descripción: </label>
                                <div class="col-sm-10 form-floating">
                                    <textarea class="form-control" id="Descripción" name="Descripcion" style="height: 150px;" required></textarea>
                                    <label for="floatingTextarea" style="margin-left: 10px;">Descripción</label>
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary" id="enviar">Subir</button>

                            </center>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
                            </script>
                    </div>
</body>

</html>