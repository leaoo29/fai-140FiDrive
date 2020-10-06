<!-- Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación.  -->
<?php
include_once "./estructura/cabecera.php";
?>
<div id="contenido" style="height: 100%; width: 100%; border: 2px solid red; border-radius:3px;">

  <form id="form" action="accion.php" name="form" method="get" data-toggle="validator">


      <div class="col-md-2 mb-1">
        
        <input class="form-control" id="n1" name="n1" placeholder="Escriba un numero" type="number" required>
        <div class="invalid-feedback">

        </div>

      </div>

      <div class="col-md-2 mb-1">
        
        <input type="number" class="form-control" id="n2" name="n2" placeholder="otro numero"required>
        <div class="invalid-feedback">

        </div>

      </div>

      <div class="col-md-3 mb-3">
        <label for="seleccion" class="control-label"></label>
        <select name=seleccion>
          <option checkdate>seleccione una operacion</option>
          <option>suma</option>
          <option>resta</option>
          <option>multiplicacion</option> 
        </select>
       
      </div> 

       <div class="invalid-feedback">

        </div>

      
  
      <div class="row">

        <div class="col-md-3 mb-1">

        </div>
        <div class="">
          <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Enviar"></input>
        </div>
      </div>
    </div>

  </form>





<?php
include_once "./estructura/pie.php";
?>