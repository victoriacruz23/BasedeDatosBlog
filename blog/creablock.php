<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu nuevo block</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<body>

    <body style="background: #bec6ff;">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4" style="justify-content: center;">
                <div class="col-lg-8 col-md-8 col-xl-8">
                    <div class="bg-light rounded h-100 p-4">
                        <div class="grid text-justific" style="--bs-columns: 10; --bs-gap: 1rem;">
                            <h6 class="g-col-6 mb-4 text-center" style="font-size: 25px;">Crea tu block</h6>
                            <form action="../databases/RegistroBlog.php" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">

                                    <label for="categoria" class="col-sm-2 col-form-label">Categoria:</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm mb-3" id="categoria" name="categoria"
                                            aria-label=".form-select-sm example" style="font-size: 15px;" required>
                                            <option selected>Elige una categoria</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fecha" class="col-sm-2 col-form-label">Fecha:</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="Fecha" name="Fecha" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                            <label for="Titulo" class="col-sm-2 col-form-label">Titulo: </label>
                                            <div class="col-sm-10 form-floating">
                                                <textarea class="form-control" id="Titulo" name="Titulo" style="height: 10px;" required></textarea>
                                                <label for="floatingTextarea" style="margin-left: 10px;">Titulo</label>

                                            </div>
                                        </div>
                                <div class="row mb-3">
                                    <label for="Descripcion" class="col-sm-2 col-form-label">Descripción: </label>
                                    <div class="col-sm-10 form-floating">
                                        <textarea class="form-control" id="Descripción" name="Descripcion"
                                            style="height: 150px;" required></textarea>
                                        <label for="floatingTextarea" style="margin-left: 10px;">Descripción</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Insertar imagen</label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="formFileSm"
                                        type="file">
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary" id="enviar">Subir</button>

                                </center>

                                <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                                    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                                    crossorigin="anonymous">
                                </script>
                        </div>

    </body>

</html>