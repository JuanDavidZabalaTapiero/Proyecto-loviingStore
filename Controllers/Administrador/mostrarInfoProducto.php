<?php

require_once ('../../Models/consultasAdmin.php');

function formularioRegistrarProducto()
{

  $objConsultasAdmin = new ConsultasAdmin();

  $tablaCat = $objConsultasAdmin->consultarCategorias();

  ?>
  <form action="../../Controllers/Administrador/registrarProducto.php" class="form" method="post"
    enctype="multipart/form-data">

    <div class="row g-3 formulario">
      <div class="col-md-3">
        <label for="nombreProd">Nombre del Producto</label> <br>
        <input type="text" id="nombreProd" name="nombreProd" class="input" required>
      </div>

      <div class="col-md-3">
        <label for="catProd">Categoría</label> <br>
        <select name="catProd" id="catProd" class="input" required>

          <option>Elegir Categoría</option>
          <?php
          foreach ($tablaCat as $f) {

            ?>
            <option value="<?php echo $f["id_categoria"] ?>"><?php echo $f["nombre_categoria"] ?></option>
            <?php
          }
          ?>
        </select>
      </div>

      <div class="col-md-3">
        <label for="precioProd">Precio</label> <br>
        <input type="number" id="precioProd" name="precioProd" class="input" required><br>
      </div>

      <div class="col-md-3">
        <label for="stockProd">Stock del Producto</label> <br>
        <input type="number" id="stockProd" name="stockProd" class="input" required>
      </div>

      <div class="col-md-12">
        <label for="descProd">Descripción del Producto</label> <br>
        <textarea name="descProd" class="input" required></textarea>
      </div>

      <div class="col-md-4">
        <label for="foto1_producto">Foto 1 del Producto</label>
        <input class="form-control input" type="file" id="foto1_producto" name="foto1_producto"
          accept=".png, .jpg, .jpeg, .gif, .webp">
      </div>

      <div class="col-md-4">
        <label for="foto2_producto">Foto 2 del Producto</label>
        <input class="form-control input" type="file" id="foto2_producto" name="foto2_producto"
          accept=".png, .jpg, .jpeg, .gif, .webp">
      </div>

      <div class="col-md-4">
        <label for="foto3_producto">Foto 3 del Producto</label>
        <input class="form-control input" type="file" id="foto3_producto" name="foto3_producto"
          accept=".png, .jpg, .jpeg, .gif, .webp">
      </div>

      <div class="text-center">
        <button type="submit" class="form-button">Envíar</button>
      </div>

    </div>
  </form>
  <?php
}

function formularioEditarProducto($id_producto)
{

  $objConsultasAdmin = new ConsultasAdmin();

  $tablaProd = $objConsultasAdmin->consultarProducto($id_producto);

  $tablaInv = $objConsultasAdmin->consultarInventario($id_producto);

  $cod_categoria = $tablaProd["cod_categoria"];

  $tablaIndCat = $objConsultasAdmin->consultarCategoria($cod_categoria);

  $tablaCat = $objConsultasAdmin->consultarCategorias();

  echo '
  <form action="../../Controllers/Administrador/editarProducto.php" class="form" method="post"
            enctype="multipart/form-data">

            <div class="row g-3 formulario">
              <div class="col-md-12">
                <label for="idProd">ID del Producto</label> <br>
                <input type="text" id="idProd" name="idProd" class="input" value="' . $tablaProd["id_producto"] . '"
                  required readonly> 
              </div>

              <div class="col-md-6">
                <label for="nombreProd">Nombre del Producto</label> <br>
                <input type="text" id="nombreProd" name="nombreProd" class="input" value="' . $tablaProd["nombre_producto"] . '"
                  required>
              </div>

              <div class="col-md-6">
                <label for="catProd">Categoría</label> <br>
                <select name="catProd" id="catProd" class="input" required>

                  <option value="' . $tablaIndCat["id_categoria"] . '">' . $tablaIndCat["nombre_categoria"] . '</option>
                  ';
  foreach ($tablaCat as $f) {
    echo '
                    <option value="' . $f["id_categoria"] . '">' . $f["nombre_categoria"] . '</option>
                    ';
  }
  echo '
                </select>
              </div>

              <div class="col-md-6">
                <label for="precioProd">Precio</label> <br>
                <input type="number" id="precioProd" name="precioProd" class="input" value="' . $tablaProd["precio_producto"] . '"
                  required><br>
              </div>

              <div class="col-md-2">
                <label for="entradasProd">Entradas</label> <br>
                <input type="number" id="entradasProd" name="entradasProd" class="input" value="' . $tablaInv["entradas"] . '"
                  required>
              </div>

              <div class="col-md-2">
                <label for="salidasProd">Salidas</label> <br>
                <input type="number" id="salidasProd" name="salidasProd" class="input" value="' . $tablaInv["salidas"] . '"
                  required>
              </div>

              <div class="col-md-2">
                <label for="stockProd">Stock del Producto</label> <br>
                <input type="number" id="stockProd" name="stockProd" class="input" value="' . $tablaInv["stock"] . '"
                  required>
              </div>

              <div class="col-md-12">
                <label for="descProd">Descripción del Producto</label> <br>
                <textarea name="descProd" class="input" required>' . $tablaProd["nombre_producto"] . '</textarea>
              </div>


              <div class="text-center">
                <button type="submit" class="form-button">Envíar</button>
              </div>

            </div>
          </form>
  ';
}