<?php
include_once "../vistas/estructura/cabecera.php";
include_once "../control/control_tp2eje4.php";
?>
<div id="contenido" style="height: 100%; width: 100%; border: 2px solid red; border-radius:3px;">

<?php
$obj = new control_tp2eje4();
$respuesta = $obj->verInformacion($_GET);

?>




</div>

<?php
include_once "./estructura/pie.php";
?>