<?php
include_once "../vistas/estructura/cabecera.php";
include_once "../control/control_eje6.php";
?>
<div id="contenido" style="height: 100%; width: 100%; border: 2px solid red; border-radius:3px;">

<?php
$obj = new control_eje6();
$respuesta = $obj->verInformacion($_GET);
echo $respuesta;
?>


<div class="alert alert-success col-md-3 offset-md-2" role="alert">

<?php echo $respuesta ?>
</div>


</div>

<?php
include_once "./estructura/pie.php";
?>