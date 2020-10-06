<?php
class control_eje8 {

public function verInformacion($datos){

    $edad=$datos["edad"];
    $estudiante= $datos["estudiante"];
   

    if(($estudiante=="si") || ($edad<12)){
        $precio=160;
    }
    if(($estudiante=="si") && ($edad>=12)){
        $precio=180;
    }
    
    else{
        $precio=300;
    }

    $texto="el precio de la entrada es: ".$precio;
    
    return $texto;
    


}



}
?>