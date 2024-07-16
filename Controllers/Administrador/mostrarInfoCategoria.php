<?php
require_once ('../../Models/consultasAdmin.php');

function cargarCategoria($idCat)
{
  $objConsultasAdmin = new ConsultasAdmin();

  $f = $objConsultasAdmin->consultarCategoria($idCat);

  echo '
          <form action="../../Controllers/Administrador/editarCategoria.php" class="form" method="post"
            enctype="multipart/form-data">

            <div class="row g-3 formulario">
              <div class="col-md-6">
                <label for="idCat">ID de la Categoría</label> <br>
                <input type="number" id="idCat" value="' . $f["id_categoria"] . '" name="idCat" class="input" readonly>
              </div>
            </div>

            <div class="row g-3 formulario">
              <div class="col-md-6">
                <label for="nombreCat">Nombre de la Categoría</label> <br>
                <input type="text" id="nombreCat" value="' . $f["nombre_categoria"] . '" name="nombreCat" class="input"
                  required>
              </div>
            </div>

              <div class="text-center">
                <button type="submit" class="form-button">Envíar</button>
              </div>
          </form>'
  ;
}
