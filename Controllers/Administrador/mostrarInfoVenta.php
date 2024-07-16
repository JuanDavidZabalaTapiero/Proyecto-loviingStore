<?php
require_once ('../../Models/consultasAdmin.php');

function formularioEditarVenta($id_venta){
  
  $objConsultasAdmin = new ConsultasAdmin();

  // VENTA

  $tablaIndVenta = $objConsultasAdmin->consultarVenta($id_venta);

  // PRODUCTOS

  $cod_producto = $tablaIndVenta["cod_producto"];

  $tablaIndProductos = $objConsultasAdmin->consultarProducto($cod_producto);

  $tablaProductos = $objConsultasAdmin->consultarProductos();

  // Clientes

  $cod_cliente = $tablaIndVenta["cod_cliente"];

  $tablaIndUsuario = $objConsultasAdmin->consultarUser($cod_cliente);

  $tablaUsuarios = $objConsultasAdmin->consultarUsers();

  // MÉTODO DE PAGO

  $cod_metodo_pago = $tablaIndVenta["cod_metodo_pago"];

  $tablaIndMetodoPago = $objConsultasAdmin->consultarMetodoPago($cod_metodo_pago);

  $tablaMetodosPago = $objConsultasAdmin->consultarMetodosPago();

  echo '
          <form action="../../Controllers/Administrador/editarVenta.php" class="form" method="post"
            enctype="multipart/form-data">

            <div class="row g-3 formulario">

              <div class="col-md-6">
                <label for="id_venta">ID de la Venta</label> <br>
                <input type="number" id="id_venta" name="id_venta" class="input" value="'.$tablaIndVenta["id_venta"].'" readonly>
              </div>

              <div class="col-md-6">
                <label for="cod_producto">Producto</label> <br>
                <select name="cod_producto" class="input">
                  <option value="'.$tablaIndProductos["id_producto"].'">'.$tablaIndProductos["nombre_producto"].'</option>
                  ';
                  
                  foreach ($tablaProductos as $f) {
                    echo '
                    <option value="'.$f["id_producto"].'">'.$f["nombre_producto"].'</option>
                    ';
                  }

                  echo '
                </select>
              </div>

              <div class="col-md-6">
                <label for="cod_cliente">Cliente</label> <br>
                <select name="cod_cliente" class="input">
                  <option value="'.$tablaIndUsuario["id_usuario"].'">'.$tablaIndUsuario["nombre_usuario"].'</option>
                  ';
                  
                  foreach ($tablaUsuarios as $f) {
                    echo '
                    <option value="'.$f["id_usuario"].'">'.$f["nombre_usuario"].'</option>
                    ';
                  }

                  echo '
                </select>
              </div>
              
              <div class="col-md-6">
                <label for="cantidad">Cantidad</label> <br>
                <input type="number" id="cantidad" name="cantidad" class="input" value="'.$tablaIndVenta["cantidad"].'">
              </div>

              <div class="col-md-6">
                <label for="fecha_venta">Fecha de la Venta</label> <br>
                <input type="date" id="fecha_venta" name="fecha_venta" class="input" value="'.$tablaIndVenta["fecha_venta"].'">
              </div>

              <div class="col-md-6">
                <label for="total">Total</label> <br>
                <input type="number" id="total" name="total" class="input" value="'.$tablaIndVenta["total"].'">
              </div>

              <div class="col-md-6">
                <label for="cod_metodo_pago">Método de Pago</label> <br>
                <select name="cod_metodo_pago" class="input">
                  <option value="'.$tablaIndMetodoPago["id_metodo"].'">'.$tablaIndMetodoPago["nombre_metodo"].'</option>
                  ';
                  
                  foreach ($tablaMetodosPago as $f) {
                    echo '
                    <option value="'.$f["id_metodo"].'">'.$f["nombre_metodo"].'</option>
                    ';
                  }

                  echo '
                </select>
              </div>

              <div class="col-md-6">
                <label for="estado">Estado</label> <br>
                <input type="text" id="estado" name="estado" class="input" value="'.$tablaIndVenta["estado"].'">
              </div>

            </div>

              <div class="text-center">
                <button type="submit" class="form-button">Envíar</button>
              </div>
          </form>
  ';
}
