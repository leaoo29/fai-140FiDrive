<?php
class control_eje5 {

public function verInformacion($datos){

    $nombre=$_GET["nombre"];
    $apellido= $_GET["apellido"];
    $edad=$_GET["edad"];
    $direccion=$_GET["direccion"];
    $estudios=$_GET["estudios"];
    $sexo=$_GET["sexo"];
    if ($edad >= 18){
        echo "Hola, yo soy ".$nombre." ".$apellido." soy mayor de edad, tengo ".$edad." años, vivo en ".$direccion.", tengo estudios:".$estudios." y mi sexo es ".$sexo; 
    }else{
        echo "Hola, yo soy ".$nombre." ".$apellido." soy menor de edad, tengo ".$edad." años y vivo en ".$direccion.", tengo estudios:".$estudios." y mi sexo es ".$sexo; 
    }
    

}



}
?>