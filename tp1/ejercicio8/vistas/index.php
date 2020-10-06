<!-- La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
Agregar un botón para limpiar el formulario y volver a consultar.  -->
<?php
include_once "./estructura/cabecera.php";
?>
<div id="contenido" style="height: 100%; width: 100%; border: 2px solid red; border-radius:3px;">

  <form id="form" action="accion.php" name="form" method="get" data-toggle="validator">


      <div class="col-md-2 mb-1">
      <label for="edad" class="control-label">ingrese si su edad:</label>
        <input type="number" class="form-control" id="edad" name="edad" placeholder="ingrese su edad" required>
        <div class="invalid-feedback">

        </div>

      </div>

      <div class="col-md-3 mb-3">
        <label for="estudiante" class="control-label">ingrese si es o no estudiante:</label><br>
        <input type="radio" id="estudiante" name="estudiante" required>si<br>
        <input type="radio" id="estudiante" name="estudiante" required>no<br>
        
       
      </div> 

       <div class="invalid-feedback">

        </div>

      
  
      <div class="row">

        <div class="col-md-3 mb-1">

        </div>
        <div class="">
          <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Enviar"></input>
        </div>
        <div class="">
          <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="reset" value="Limpiar"></input>
        </div>

      </div>
    </div>

  </form>





<?php
include_once "./estructura/pie.php";
?>