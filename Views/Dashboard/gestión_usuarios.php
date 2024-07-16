<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gestión de Clientes</title>
  <link rel="shortcut icon" href="../assets/img/descarga.png">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link
    href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.0.3/b-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.css"
    rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/styleformularios.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../Administrador/home.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Loviing Store</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../index.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../Administrador/home.html">
          <i class="fa-brands fa-slack"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#trimestral-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-bag-shopping"></i>
          <span>Gestión de productos</span><i class=" fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="trimestral-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!-- <li>
          <a href="registrarPrograma.html">
            <i class="fa-solid fa-circle"></i><span>Registrar</span>
          </a>
        </li> -->
          <li>
            <a href="Gestion-productos.html">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>
        </ul>
      </li><!-- End programacion trimestral Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#formacion-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-user-minus"></i>
          <span>Gestión de proveedores</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="formacion-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!-- <li>
          <a href="registrarPrograma.html">
            <i class="fa-solid fa-circle"></i><span>Registrar</span>
          </a>
        </li> -->
          <li>
            <a href="Gestion-proveedores.html">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>
        </ul>
      </li><!-- End programas de formacion Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#fichas-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-file-pen"></i>
          <span>Gestión de Categorías</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="fichas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!-- <li>
          <a href="registrarPrograma.html">
            <i class="fa-solid fa-circle"></i><span>Registrar</span>
          </a>
        </li> -->
          <li>
            <a href="Gestión-Categoría.html">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>
        </ul>
      </li><!-- End fichas Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#instructores-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-users"></i>
          <span>Gestión de Cliente</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="instructores-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!-- <li>
          <a href="registrarPrograma.html">
            <i class="fa-solid fa-circle"></i><span>Registrar</span>
          </a>
        </li> -->
          <li>
            <a href="Gestion-clientes.html">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>

          <li>
            <a href="registrar_cliente.html">
              <i class="fa-solid fa-circle"></i><span>Registrar</span>
            </a>
          </li>
        </ul>
      </li><!-- End instructores Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ambientes-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-boxes-stacked"></i>
          <span>Gestión de Pedidos</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="ambientes-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!-- <li>
          <a href="registrarPrograma.html">
            <i class="fa-solid fa-circle"></i><span>Registrar</span>
          </a>
        </li> -->
          <li>
            <a href="Gestion-productos.html">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Clientes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <!-- <li class="breadcrumb-item"><a href="Gestion-productos.html">Consultar</a></li> -->
          <li class="breadcrumb-item active">Consultar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card tabla-consultar">
            <div class="card-body tabla-consultar">
              <h5 class="card-title">Gestión clientes</h5>
              <table id="TableSynchronize" class="table datatable">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre completo</th>
                    <th>Genero</th>
                    <th>Fecha de nacimiento</th>
                    <th>Tipo de documento</th>
                    <th>Numero de documento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>4801</td>
                    <td>Pepe veraz</td>
                    <td>Masculino</td>
                    <td>05/11/2005</td>
                    <td>CC</td>
                    <td>101121222</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>4802</td>
                    <td>Juan Hernandez</td>
                    <td>Masculino</td>
                    <td>05/11/2000</td>
                    <td>CC</td>
                    <td>1014635322</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>4803</td>
                    <td>No c</td>
                    <td>Femenino</td>
                    <td>05/11/2001</td>
                    <td>CC</td>
                    <td>10146657672</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>4804</td>
                    <td>Perry el ornitorrinco</td>
                    <td>Masculino</td>
                    <td>05/11/2000</td>
                    <td>CC</td>
                    <td>10177777122</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>4805</td>
                    <td>Manuel</td>
                    <td>Masculino</td>
                    <td>05/11/2008</td>
                    <td>CC</td>
                    <td>10146699992</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>4806</td>
                    <td>Emmanuel</td>
                    <td>Femenino</td>
                    <td>05/11/2005</td>
                    <td>CC</td>
                    <td>61144422</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>4807</td>
                    <td>Andrez Lorenzo</td>
                    <td>Masculino</td>
                    <td>05/11/2006</td>
                    <td>CC</td>
                    <td>10122222222</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>4808</td>
                    <td>Marta Maldonado</td>
                    <td>Femenino</td>
                    <td>05/11/2003</td>
                    <td>TI</td>
                    <td>34343434122</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>4801</td>
                    <td>Agente P</td>
                    <td>Masculino</td>
                    <td>05/11/2002</td>
                    <td>CC</td>
                    <td>000000022</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>
                  <tr>
                    <td>4809</td>
                    <td>Ferb</td>
                    <td>Masculino</td>
                    <td>05/11/2001</td>
                    <td>CC</td>
                    <td>1023232322</td>
                    <td><button class="btn btn-primary prin-sena-button">Editar</button></td>
                    <td><button class="btn btn-primary prin-sena-button-eliminar">Eliminar</button></td>
                  </tr>

                </tbody>
              </table>

              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script
    src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.0.3/b-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.js"></script>

  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <script>
    $(document).ready(function () {
      // Inicializa DataTables con la configuración necesaria
      $('#TableSynchronize').DataTable({
        buttons: [
          //'copy','excel','pdf','print' 
          // Define los botones de descarga
        ],
        lengthMenu: [[5, 25, 50, -1], [5, 25, 50, "Todo"]], // Define las opciones de cantidad de entradas por página
        pageLength: 10, // Establece la cantidad de entradas por página predeterminada
        dom: '<"top"fBlS>rt<"bottom"ip>', // Define la disposición de los elementos de DataTables (botones)
        language: {
          lengthMenu: 'Mostrar _MENU_ registros', // Cambia el texto del filtro de cantidad de entradas por página
          search: 'Buscar:', // Cambia el texto del buscador
          info: 'Mostrando _START_ a _END_ de _TOTAL_ entradas', // Cambia el texto de información sobre la paginación
        }
      });
    });
  </script>

  <!-- Biblioteca jsPDF -->


  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.15/jspdf.plugin.autotable.min.js"></script> -->


  <!-- Biblioteca SheetJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>

</body>

</html>