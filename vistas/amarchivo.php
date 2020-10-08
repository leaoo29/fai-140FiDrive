<!-- Creamos el archivo amarchivo.php para alta o modificación de un Archivo. Este archivo debe incluir los archivos: cabecera.php, pie.php y menu.php
Nombre del Archivo (Colocar valor por defecto 1234.png)
Descripción del Archivo
 Usuario que lo carga (Seleccionar desde un Combo, los usuarios posibles son: admin, visitante, y usted)
 Seleccionar Icono que se va a utilizar (Imagen, Zip, Doc, PDF, XLS). Usar CheckBox.
Clave del Archivo a modificar. (Este debe ser un campo Oculto. -->
<?php
include_once "./estructura/cabecera.php";
?>
<div id="contenido" style="height: 100%; width: 100%; border: 1px solid green; border-radius:3px;">

  <form id="form" name="form" action="accion.php" method="get" data-toggle="validator">


    <div class="row">
      <!-- fila -->

      <div class="col-md-3 mb-3">
        <!-- grupo de control para todas las pantallas medianas y large mide 6, mb es margen b es botton -3 -->
        <label for="nombre" class="control-label">Nombre del archivo</label>
        <input class="form-control" name="nombre" id="nombre" placeholder="1234.png" type="text" required>
        <div class="invalid-feedback">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <!-- grupo de control para todas las pantallas medianas y large mide 6, mb es margen b es botton -3 -->
        <label for="descripcion" class="control-label">Descripcion:</label>
        <textarea class="form-control" name="descripcion" id="descripcion" required></textarea>
        <div class="invalid-feedback">
        </div>
      </div>

      <div class="col-md-4  mb-3">
        <!-- grupo de control para todas las pantallas medianas y large mide 6, mb es margen b es botton -3 -->
        <label for="usuario" class="control-label">usuario que lo carga:</label><br>
        <select name="usuario" id="usuario">
          <option>Admin</option>
          <option>visitante</option>
          <option>Usted</option>
        </select>
        <div class="invalid-feedback">
        </div>
      </div>

      <div class="col-md-7 offset-md-3 mb-1">
        <!-- grupo de control para todas las pantallas medianas y large mide 6, mb es margen b es botton -3 -->
        <label for="icono" class="control-label">ingrese el icono que va a utilizar:</label>

        <input type="checkbox" id="seleccion" name="seleccion" value="publico" required>
        <label for="publico">Imagen</label>
        <input type="checkbox" id="seleccion" name="seleccion" value="siete" required>
        <label for="siete">Zip</label>
        <input type="checkbox" id="seleccion" name="seleccion" value="mayores" required>
        <label for="mayores">Doc</label>
        <input type="checkbox" id="seleccion" name="seleccion" value="mayores" required>
        <label for="mayores">PDF</label>
        <input type="checkbox" id="seleccion" name="seleccion" value="mayores" required>
        <label for="mayores">XLS</label>
        <div class="invalid-feedback">
        </div>

      </div>
      <div class="col-md-3 offset-md-3 mb-1">
        <!-- grupo de control para todas las pantallas medianas y large mide 6, mb es margen b es botton -3 -->
        <label for="icono" class="control-label">ingrese la clave del archivo a modificar</label><br>

        <input type="password" id="clave" name="clave" required>
        <div class="invalid-feedback">
        </div>
        <div class="row">

          <div class="col-md-6 mb-3">

          </div>
          <div class="">
            <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Enviar">
            <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="reset" value="Borrar">

          </div>
        </div>


      </div>
    </div>

  </form>
</div>


<?php
include_once "./estructura/pie.php";
?>