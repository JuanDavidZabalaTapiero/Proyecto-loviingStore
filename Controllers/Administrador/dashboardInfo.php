<?php
require_once('../../Models/consultasAdmin.php');

function mostrarProductosVendidos(){
    $objConsultas = new ConsultasAdmin();
    $objConsultasAdmin = new ConsultasAdmin();

    $tablaProductos = $objConsultas->consultarProductos();
    $tablaVentas = $objConsultasAdmin->consultarVentas();

    foreach ($tablaVentas as $f){
            echo '
        <tbody>
            <tr>
                <th scope="row"><a href="#"><img src="../../Uploads/Productos/'.$f['foto1_producto'].'" alt=""></a></th>
                        <td><a href="consultarProductos.php" class="text-primary fw-bold">'.$f['nombre_producto'].'</a></td>
                        <td>'.$f['precio_producto'].'</td>
                        <td class="fw-bold">'.$f['cantidad'].'</td>
                        <td>'.$f['valor_total'].'</td>
            </tr>
            ';
    }
                                
        ;
}

function mostrarVentasClientes(){
    $objConsultas = new ConsultasAdmin();
    $objConsultasAdmin = new ConsultasAdmin();

    $tablaProductos = $objConsultas->consultarProductos();
    $tablaVentas = $objConsultasAdmin->consultarVentas();

    foreach ($tablaVentas as $f){
            echo '
                <tbody>
                      <tr>
                        <th scope="row"><a href="#">'.$f['id_venta'].'</a></th>
                        <td>'.$f['nombre_usuario'].'</td>
                        <td><a href="consultarProductos.php" class="text-primary">'.$f['nombre_producto'].'</a></td>
                        <td>'.$f['valor_total'].'</td>
                        <td><span class="badge bg-success">'.$f['estado'].'</span></td>
                      </tr>
                    </tbody>
                    ';
    }
}


function mostrarInfoTarjetas(){
    $objConsultas = new ConsultasAdmin();
    $cuantificarVentas = $objConsultas->cuantificarVentas();
    $valorVentasMes = $objConsultas->valorVentasMes();
    $consultarClientes = $objConsultas->consultarClientes();

    foreach ($cuantificarVentas as $f){
            echo '
                <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Ventas <span>| Este mes</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>'.$f['ventas_en_mes'].'</h6>
                      <span class="text-muted small pt-2 ps-1">ventas del mes</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Ventas <span>| Este mes</span></h5>';

                  foreach ($valorVentasMes as $ventaMes) {
                  echo'<div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                    
                      <h6>$'.$ventaMes['valorMensual'].'</h6>
                    <span class="text-muted small pt-2 ps-1">Incremento mensual</span>
                  </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>';

                foreach($consultarClientes as $f){
                echo'<div class="card-body">
                  <h5 class="card-title">Clientes <span>| este año</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>'.$f['totalClientes'].'</h6>
                        <span class="text-muted small pt-2 ps-1">incremento anual</span>

                    </div>
                  </div>

                </div>
              </div>

            </div>
                    ';
    }
  }
 }
}


function grafico() {
  $objConsultas = new ConsultasAdmin();
  $cuantificarVentas = $objConsultas->cuantificarVentas();
  $valorVentasMes = $objConsultas->valorVentasMes();
  
  // Inicializar los arrays para los datos del gráfico
  $ventasMes = array_fill(0, 12, 0);  // Suponemos que hay 12 meses en un año
  $labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

  // Llenar los datos de ventas por mes
  foreach ($cuantificarVentas as $venta) {
      $mes = $venta['mes'] - 1;  // Ajustar mes a base 0 para el array
      $ventasMes[$mes] = $venta['ventas_en_mes'];
  }
  
  echo "
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          const ctx = document.getElementById('graph').getContext('2d');
          
          // Definir los datos
          const data = {
              labels: " . json_encode($labels) . ",
              datasets: [
                  {
                      label: 'Ventas ',
                      data: " . json_encode($ventasMes) . ",
                      fill: false,
                      borderColor: 'rgb(75, 192, 192)',
                      tension: 0.1
                  },
                  {
                      label: 'Ingresos',
                      data: [50, 60, 70, 85, 55, 65, 45, 70, 60, 80, 90, 100],
                      fill: false,
                      borderColor: 'rgb(153, 102, 255)',
                      tension: 0.1
                  },
                  {
                      label: 'Clientes ',
                      data: [30, 50, 40, 60, 70, 80, 90, 100, 110, 120, 130, 140],
                      fill: false,
                      borderColor: 'orange',
                      tension: 0.1
                  }
              ]
          };
          
          // Configuración del gráfico
          const config = {
              type: 'line',
              data: data,
          };
          
          // Crear el gráfico
          new Chart(ctx, config);
      });
  </script>
  ";
}




?>
