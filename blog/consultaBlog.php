<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Blog</title>
     <!-- CSS only -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background: linear-gradient(to right,#5695EC ,#3BEEAF);">
<?php
    include('menu.php');
?>
 <div class="container" style="justify-content: center;">
    <div class="col-12 text-center">
        <a class="blog-header-logo text-dark" href="../blog/index.php"><h1>Blogs</h1></a>
      </div>
        <div class="row" style="justify-content: center;">
            <div class="col-12" style="margin-top:5%;">
                <div class="table-responsive bg-white shadow-lg"  style="padding: 20px; border-radius:20px;">
                <h2 class="text-center mb-2">Consulta de Blog</h2>
                <table id="example" class="table  table-striped table-hover" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nº</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Clave</th>
                            <th scope="col">Direccion </th>
                            <th scope="col">Editar </th>
                            <th scope="col">Eliminar </th>
                        </tr>
                    </thead>
                    <tbody class="table-primary">
                    <?php
                        require_once("../databases/conexion.php");
                        $usuario = $conexion->query("SELECT * FROM usuario");
                         $i = 1;
                        if ($usuario->num_rows > 0) {
                        while ($recibe = $usuario->fetch_assoc()) {
                            ?>
                        <tr>
                            <th scope="row"><?php echo $i++; ?></th>
                            <td><?php echo $recibe["nombres"]; ?></td>
                            <td><?php echo $recibe["username"]; ?></td>
                            <td><?php echo $recibe["clave"]; ?></td>
                            <td><?php echo $recibe["direccion"]; ?></td>
                            <div style="justify-content: center;">
                                <td><a onclick=editarUsuario(<?php echo $recibe['id_usuario']; ?>) class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-pencil-square"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a></td>
                                <td><a onclick=eliminarUsuario(<?php echo $recibe['id_usuario']; ?>) class="text-dark text-center btn btn-danger"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg></a></td>

                            </div>
                        </tr>
                        <?php
                                }
                            } ?>
                    </tbody>
                    <tfoot class="table-dark">
                            <th scope="col">Nº</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Clave</th>
                            <th scope="col">Direccion </th>
                            <th scope="col">Editar </th>
                            <th scope="col">Eliminar </th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
    <script>

        function eliminarUsuario(eliminar) {
            Swal.fire({
                title: `¿Desea eliminar el usuario`,
                text: "Esto podria generar problemas en el sistema",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "../databases/eliminarUsuario.php?eliminar=" + eliminar
                    // console.log(eliminar);
                }
            })
        }

        function editarUsuario(eliminar) {
            Swal.fire({
               title: `¿Desea editar el usuario`,
                text: "Esto podria generar problemas en el sistema",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#017F14',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Editar',
                cancelButtonText: 'Cancelar',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `../blog/editarUsuario.php?editar=${eliminar}`
                    // console.log(eliminar);
                }
            })
        }

        
    </script>
    
</body>
</html>