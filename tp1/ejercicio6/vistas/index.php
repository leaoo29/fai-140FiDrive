<!-- Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
que procesa el formulario la cantidad de deportes que practica -->
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
       
      </div> 
       <div class="invalid-feedback">

        </div>

      </div>

<div class="col-md-9 mb-3">
  <label for="estudios" >seleccione su nivel de Estudios: </label><br>

  <input  id="estudios" name="estudios" type="radio" value="no tiene estudios"  required>

  <label for="estudios" >1-no tiene estudios </label><br>
    
  <input  id="estudios" name="estudios" type="radio" value="primario"  required>

  <label for="estudios" >2-estudios primarios </label><br>

  <input  id="estudios" name="estudios" type="radio" value="secundarios"  required>

  <label for="estudios" >3-estudios secundarios </label><br>
   
    <div class="invalid-feedback">

     </div>
  </div>

  <div class="col-md-9 mb-3">
  <label for="estudios" >seleccione su sexo: </label><br>

  <input  id="sexo" name="sexo" type="radio" value="masculino"  required>

  <label for="sexo" >Masculino </label><br>
    
  <input  id="sexo" name="sexo" type="radio" value="femenino"  required>

  <label for="sexo" >Femenino </label><br>

  <div class="invalid-feedback">

     </div>
  </div>

  <div class="col-md-9 mb-3">
  <label for="estudios" >seleccione su deporte: </label><br>

  <input  id="arreglo[]" name="arreglo[]" type="checkbox" value="futbol"  required>

  <label for="deporte" >Futbol </label><br>
    
  <input  id="arreglo[]" name="arreglo[]" type="checkbox" value="basquet" required>

  <label for="deporte" >Basquet </label><br>

  <input  id="arreglo[]" name="arreglo[]" type="checkbox" value="tennis" required>

  <label for="deporte" >Tennis</label><br>

  <input  id="arreglo[]" name="arreglo[]" type="checkbox" value="Voley" required>

  <label for="deporte" >Voley </label><br>
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