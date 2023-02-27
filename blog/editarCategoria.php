<?php
if(empty($_GET['editar'])){
    header("Location: ../blog/index.php");
    exit;
}else{
    $categoria_id = $_GET['editar'];
    $categoria_nombre = $_GET['nombre'];
    // echo "no exite";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categorias</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<body style="background: linear-gradient(to right,#5695EC ,#3BEEAF);">
    <div class="container" style="justify-content: center;">
    <div class="col-12 text-center">
        <a class="blog-header-logo text-dark" href="../blog/index.php"><h1>Categorias</h1></a>
      </div>
        <div class="row" style="justify-content: center;">
            <div class="col-sm-6 col-md-6" style="margin-top: 5%;">
                <form class="shadow-lg bg-white mb-5" style="padding: 20px; border-radius:20px;"
                    action="../databases/editarCategoria.php" method="POST">
                       <h2 class="text-center mb-2">Editar categoria</h2>
                      
                    <div class="mb-3">
                        <input type="hidden" name="id" id="id" value="<?php echo $categoria_id; ?>">
                        <label for="categoria" class="form-label">Nombre de la categoria</label>
                        <input type="text" class="form-control" value="<?php echo $categoria_nombre; ?>" name="categoria" id="categoria" required>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary">Editar</button>
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