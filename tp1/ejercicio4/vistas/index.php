<!-- Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), 
enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente:
 “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
Cambiar el método Post por Get y analizar las diferencias -->
<?php
include_once "./estructura/cabecera.php";
?>
<div id="contenido" style="height: 100%; width: 100%; border: 2px solid red; border-radius:3px;">

  <form id="form" action="accion.php" name="form" method="get" data-toggle="validator">

    <div class="row">
      <!-- fila -->
      <div class="col-md-6 mb-3">
        <!-- grupo de control para todas las pantallas medianas y large mide 6, mb es margen b es botton -3 -->
        <label for="nombre" class="control-label">Nombre</label>
        <input class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre" type="text" required>
        <div class="invalid-feedback">

        </div>

      </div>

      <div class="col-md-6 mb-3">
        <label for="apellido" class="control-label">Apellido</label>
        <input class="form-control" id="apeliido" name="apellido" placeholder="Escriba su apellido" type="text" required>
        <div class="invalid-feedback">

        </div>

      </div>

      <div class="col-md-3 mb-3">
        <label for="edad">Edad</label>
        <input type="number" class="form-control" id="edad" name="edad" placeholder="Su edad"required>
        <div class="invalid-feedback">

        </div>

      </div>

      <div class="col-md-3 mb-3">
        <label for="direccion" class="control-label">Direccion</label>
        <input class="form-control " id="direccion" name="direccion" placeholder="Escriba su direccion" required>
          </input>
        <div class="invalid-feedback">

        </div>

      </div> 
      
      <div class="row">

        <div class="col-md-9 mb-3">

        </div>
        <div class="">
          <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Enviar"></input>
        </div>
      </div>
    </div>

  </form>
</div>




<?php
include_once "./estructura/pie.php";
?>