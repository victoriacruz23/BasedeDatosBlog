<?php
function alerta($titulo, $icons, $dirige)
{
    echo "<script languaje='javascript'>
window.onload = function alerta(){
    Swal.fire({
        icon:'$icons',
        title: '$titulo',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
      window.location = '$dirige';  
});
}
</script>";
}
?>