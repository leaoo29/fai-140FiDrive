<!-- Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- 
y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. 
Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior. -->

<?php
include_once "./estructura/cabecera.php";
?>
<div id="contenido" style="height: 100%; width: 100%; border: 2px solid red; border-radius:3px;">

    <form id="form" name="form" action="accion.php" method="post" data-toggle="validator">
        <div class="col-md-6 mb-3">
            Ingrese un numero: <input name="numero_form" type="number" id="numero_form" required> <br />
            <div class="invalid-feedback">

            </div>


            <div class="row">

                <div class="col-md-8 mb-3">

                </div>
                <div class="">
                    <input id="btn_eje4" class="btn btn-primary" name="btn_eje4" type="submit" value="Enviar">

                </div>
            </div>
            </div>
    </form>
</div>

<?php
include_once "./estructura/pie.php";
?>