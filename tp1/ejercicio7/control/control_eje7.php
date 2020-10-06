<?php
class control_eje7 {

public function verInformacion($datos){

    $n1=$datos["n1"];
    $n2= $datos["n2"];
    $seleccion=$datos["seleccion"];

    if($seleccion=="suma"){
        $resultado=$n1+$n2;
    }
    if($seleccion=="resta"){
        $resultado=$n1-$n2;
    }
    if($seleccion=="multiplicacion"){
        $resultado=$n1*$n2;
    }

    echo "la ".$seleccion." entre ".$n1." y ".$n2." es igual a ".$resultado. "<br>"; 
    


}



}
?>