<?php
if ($_POST){
$numero = $_POST["numero_form"] ;
if ($numero == 0){
    echo "<h3>Su numero: $numero es igual a 0</h3><br />";
}

if ($numero > 0){
    echo "<h3>Su numero: $numero es positivo</h3><br />";
}

if ($numero < 0){
    echo "<h3>Su numero: $numero es nagativo</h3><br />";
}

}else{
echo "No se recibieron datos<br/>";
}

echo '<a href="form_enviar_numero.php">Atras</a>'
?>