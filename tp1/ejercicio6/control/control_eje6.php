<?php
class control_eje6 {

public function verInformacion($datos){

    $nombre=$datos["nombre"];
    $apellido= $datos["apellido"];
    $edad=$datos["edad"];
    $direccion=$datos["direccion"];
    $estudios=$datos["estudios"];
    $sexo=$datos["sexo"];
    $deporte=$datos["arreglo"];

    if ($edad >= 18){
        echo "Hola, yo soy ".$nombre." ".$apellido." soy mayor de edad, tengo ".$edad." años, vivo en ".$direccion.", tengo estudios:".$estudios.", mi sexo es ".$sexo. "<br>"; 
    }else{
        echo "Hola, yo soy ".$nombre." ".$apellido." soy menor de edad, tengo ".$edad." años y vivo en ".$direccion.", tengo estudios:".$estudios." y mi sexo es ".$sexo. "<br>"; 
    }
    echo "los deportes que practico son:";
    
    for ($i=0; $i < count($deporte) ; $i++) { 
        echo $deporte[$i]. "<br>";
    }


}



}
?>