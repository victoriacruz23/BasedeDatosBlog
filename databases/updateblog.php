<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('fuction.php');
include('conexion.php');
// print_r($_POST);exit;
$id = $_POST['id_blog'];
$catego=$_POST['categoria'];
$titulo=$_POST['Titulo'];
$descrip=$_POST['Descripcion'];
if($catego == 0){
    echo '<script>
        alert("Seleccione una categoria");
        window.location="../blog/editarblock.php?id='.$id.'"
        </script>';
        exit;
}
$consulta = $conexion->query("SELECT * FROM blog WHERE id_blog= '$id'");
$edit= $conexion->query("UPDATE blog SET id_categoria='$catego',titulo='$titulo',descripcion='$descrip' WHERE id_blog= '$id'");
$ruta = '../blog/editarblock.php?id='.$id;
if($consulta->num_rows == 1){
    if($edit){
        // echo '<?php>
        // alert("Blog actualizado ");
        // window.location="../blog/editarblock.php?id='.$id.'"
        // </?php>';
        alerta('Blog actualizado','success',$ruta);
    }else{
        // echo '<?php>
        // alert("Blog error");
        // window.location="../blog/editarblock.php?id='.$id.'"
        // </?php>';
        alerta('Blog error','error',$ruta);
    }
}else{
    // echo '<script>
    // alert("Blog error");
    // window.location="../blog/"
    // </script>';
    alerta('Blog error','error',$ruta);
}
?>