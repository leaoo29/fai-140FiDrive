<!-- Creamos el archivo compartirarchivo.php para compartir un archivos. Este archivo debe incluir los archivos: cabecera.php, pie.php y menu.php
Etiqueta que muestra nombre del archivo compartido (Colocar valor por defecto 1234.png)
Ingresar cantidad de días que se comparte (Si queda vació quiere decir que no expira) 
Ingresar cantidad de descargar posibles (Si queda vació quiere decir que no hay limites) 
Usuario que lo carga (Seleccionar desde un Combo, los usuarios posibles son: admin, visitante, y usted)
CheckBox para seleccionar que se debe proteger con contraseña
Un Campo para cargar la contraseña en caso que se seleccione esta opción. 
Etiqueta para mostrar el link de compartir generado
Botón que permite generar un hash que sera el acceso para compartir el archivo -->

<?php
include_once "./estructura/cabecera.php";
?>

<div id="contenido" style="height: 100%; width: 100%; border: 2px solid red; border-radius:3px;">

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
        <label for="comparte" >Cantidad de dias que se comparte:</label> 
        <input class="form-control" type="number" id="comparte" name="comparte" required>
        <div class="invalid-feedback">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <!-- grupo de control para todas las pantallas medianas y large mide 6, mb es margen b es botton -3 -->
        <label for="descargas">Cantidad de dias de descarga:</label> 
        <input class="form-control" type="number" id="descargas" name="descargas" required>
        <div class="invalid-feedback">
        </div>
      </div>

      <div class="col-md-3 offset-md-0  mb-3">
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
      <div class="col-md-4  mb-3">
        <!-- grupo de control para todas las pantallas medianas y large mide 6, mb es margen b es botton -3 -->
        <p><b>se debe proteger con contraseña??</b></p> 
        
        <input type="checkbox" id="check" name="check" value="1" onchange="javascript:showContent()"/>
        <label for="content">Contraseña</label>
        <input type="number" class="form-control" id="content" name="content" style="display: none;">
        
            <div class="invalid-feedback">
        </div>
      </div>

        
            <div class="col-md-3 mb-3">
        <label for="compartir" class="control-label">Link para compartir generado</label>
        <textarea class="form-control text-wrap" id="compartir" name="compartir">
          </textarea>
          <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Generar HASH">
        <div class="invalid-feedback">
        </div>
      </div>
     
      <div class="col-md-7 mb-5">

     
      <div class="col-md-7 mb-1" >
        <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Enviar">
        <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="reset" value="Borrar">

      </div>
      </div>

  </div>

          
 
  </form>
  </div>


<?php
include_once "./estructura/pie.php";
?>
  