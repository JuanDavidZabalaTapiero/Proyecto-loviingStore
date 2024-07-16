<?php

require_once('../../Models/consultasAdmin.php');

function formularioRegistroProveedor()
{
  $objConsultasAdmin = new ConsultasAdmin();

  $tablaProductos = $objConsultasAdmin->consultarProductos();

  echo '
        <form action="../../Controllers/Administrador/registrarProveedor.php" class="form" method="post"
            enctype="multipart/form-data">

            <div class="row g-3 formulario">
              <div class="col-md-3">
                <label for="nombreEmp">Nombre de Empresa</label> <br>
                <input type="text" id="nombreEmp" name="nombreEmp" class="input"
                  required>
              </div>

              <div class="col-md-3">
                <label for="nombre_representante">Representante de ventas</label> <br>
                <input type="text" id="nombre_representante" name="nombre_representante" class="input"
                  required>
              </div>

              <div class="col-md-6">
                <label for="prodProv">Producto</label> <br>
                <select name="prodProv" class="input">
                  ';
                  
                  foreach ($tablaProductos as $f) {
                    echo '
                    
                    <option value="'.$f["id_producto"].'">'.$f["nombre_producto"].'</option>

                    ';
                  }

                  echo '
                </select>

              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="form-button">Envíar</button>
            </div>
        </form>
    ';
}

function formularioEditarProveedor($id_proveedor){

  $objConsultasAdmin = new ConsultasAdmin();

  $tablaProv = $objConsultasAdmin->consultarProveedor($id_proveedor);

  $tablaProductos = $objConsultasAdmin->consultarProductos();

  $cod_producto = $tablaProv["cod_producto"];

  $tablaIndProductos = $objConsultasAdmin->consultarProducto($cod_producto);

  echo '
        <form action="../../Controllers/Administrador/editarProveedor.php" class="form" method="post"
            enctype="multipart/form-data">

            <div class="row g-3 formulario">
              <div class="col-md-12">
                <label for="id_proveedor">ID del Proveedor</label> <br>
                <input type="text" id="id_proveedor" name="id_proveedor" class="input" value="'.$tablaProv["id_proveedor"].'" readonly
                  required>
              </div>

              <div class="col-md-3">
                <label for="nombre_empresa">Nombre de Empresa</label> <br>
                <input type="text" id="nombre_empresa" name="nombre_empresa" class="input" value="'.$tablaProv["nombre_empresa"].'"
                  required>
              </div>

              <div class="col-md-3">
                <label for="representante_ventas">Representante de ventas</label> <br>
                <input type="text" id="representante_ventas" name="representante_ventas" class="input" value="'.$tablaProv["representante_ventas"].'"
                  required>
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
            </div>

            <div class="text-center">
              <button type="submit" class="form-button">Envíar</button>
            </div>
        </form>
    ';
}