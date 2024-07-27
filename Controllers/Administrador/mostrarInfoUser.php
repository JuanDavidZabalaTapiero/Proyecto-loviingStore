<?php

require_once ('../../Models/consultasAdmin.php');

function cargarUser($idUser)
{
  $objConsultasAdmin = new ConsultasAdmin();

  $f = $objConsultasAdmin->consultarUser($idUser);

  echo '
    <form action="../../Controllers/Administrador/editarUser.php" class="form" method="post"
        enctype="multipart/form-data">
        <div class="row g-3 formulario">
            <div class="col-md-6">
                <label for="nombre_usuario">Nombre del Usuario</label> <br>
                <input type="text" id="nombre_usuario" value="' . $f["nombre_usuario"] . '" name="nombreUser" class="input"
                  required>
            </div>

            <div class="col-md-6">
                <label for="genero_usuario">Género</label> <br>
                <select name="generoUser" id="genero_usuario" class="input" required>
                    <option value="' . $f["genero"] . '">' . $f["genero"] . '</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="fecha_nac_usuario">Fecha de Nacimiento</label> <br>
                <input type="date" name="fechaNacUser" id="fecha_nac_usuario" class="input" required value="' . $f["fecha_nacimiento"] . '">
            </div>

            <div class="col-md-6">
                <label for="tipo_doc_usuario">Tipo de Documento</label> <br>
                <select name="tipoDocUser" id="tipo_doc_usuario" class="input" required>
                    <option value="' . $f["tipo_documento"] . '">' . $f["tipo_documento"] . '</option>
                    <option value="C.C">C.C</option>
                    <option value="T.I">T.I</option>
                    <option value="DNI">DNI</option>
                    <option value="NIE">NIE</option>
                    <option value="Pasaporte">Pasaporte</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="num_doc_usuario">Número de Documento</label> <br>
                <input type="number" id="num_doc_usuario" value="' . $f["num_documento"] . '" name="numDocUser"
                  class="input" required><br>
            </div>
            
            <div class="col-md-6">
                <label for="email_usuario">Correo Electrónico</label> <br>
                <input type="email" id="email_usuario" value="' . $f["email_usuario"] . '" name="emailUser"
                  class="input" required>
            </div>

            <div class="col-md-4">
                <label for="rol_usuario">Rol del Usuario</label> <br>
                <select name="rolUser" id="rol_usuario" class="input">
                    <option value="' . $f["rol_usuario"] . '">' . $f["rol_usuario"] . '</option>
                    <option value="Cliente">Cliente</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>
            
            <div class="col-md-4">
                <label for="estado_usuario">Estado del Usuario</label> <br>
                <select name="estadoUser" id="estado_usuario" class="input">
                    <option value="' . $f["estado_usuario"] . '">' . $f["estado_usuario"] . '</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
            
            <div class="col-md-4">
                <label for="foto_usuario">Foto del Usuario</label>
                <input class="form-control input" type="file" id="foto_usuario" name="foto_usuario"
                  accept=".png, .jpg, .jpeg, .gif">
            </div>

            <div class="text-center">
                <button type="submit" class="form-button">Envíar</button>
            </div>
        </div>
    </form>
    ';
}

// HOME DEL ADMIN
function cargarHeaderAdmin()
{
  echo '
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="home.php" class="logo d-flex align-items-center">
        <img src="../Dashboard/assets/img/favicon.png" alt="">
        <span class="d-none d-lg-block logo_ls">Loviing Store</span>
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
                <img src="../Dashboard/assets/img/messages-1.jpg" alt="" class="rounded-circle">
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
                <img src="../Dashboard/assets/img/messages-2.jpg" alt="" class="rounded-circle">
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
                <img src="../Dashboard/assets/img/messages-3.jpg" alt="" class="rounded-circle">
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
        ';

  cargarPerfilAdmin();

  echo '
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  ';
}

function cargarPerfilAdmin()
{
  $idUser = $_SESSION["idUser"];

  $objConsultasAdmin = new ConsultasAdmin();

  $f = $objConsultasAdmin->consultarUser($idUser);

  echo '
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../Uploads/Usuarios/' . $f["foto_usuario"] . '" alt="Profile" class="rounded-circle" >
            <span class="d-none d-md-block dropdown-toggle ps-2">' . $f["nombre_usuario"] . '</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>' . $f["nombre_usuario"] . '</h6>
              <span>' . $f["rol_usuario"] . '</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="userProfileAdmin.php">
                <i class="bi bi-person"></i>
                <span>Mi perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Configuración</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>¿Necesitas Ayuda?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../Controllers/cerrarSesion.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Cerrar Sesión</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
    ';
}

function cargarMenuAdmin()
{

  ?>
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="home.php">
          <i class="fa-brands fa-slack"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#GestionProductos-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-bag-shopping"></i>
          <span>Gestión de Productos</span><i class=" fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="GestionProductos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="consultarProductos.php">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>

          <li>
            <a href="registrarProducto.php">
              <i class="fa-solid fa-circle"></i><span>Registrar</span>
            </a>
          </li>
        </ul>
      </li><!-- End programacion trimestral Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#formacion-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-user"></i>
          <span>Gestión de Proveedores</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="formacion-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="consultarProveedores.php">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>

          <li>
            <a href="registrarProveedor.php">
              <i class="fa-solid fa-circle"></i><span>Registrar</span>
            </a>
          </li>
        </ul>
      </li><!-- End programas de formacion Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#GestionCategorias-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-file-pen"></i>
          <span>Gestión de Categorías</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="GestionCategorias-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="consultarCategorias.php">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>

          <li>
            <a href="registrarCategoria.php">
              <i class="fa-solid fa-circle"></i><span>Registrar</span>
            </a>
          </li>
        </ul>
      </li><!-- End fichas Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#GestionUsuarios-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-users"></i>
          <span>Gestión de Usuarios</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="GestionUsuarios-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../Administrador/consultarUsers.php">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>

          <li>
            <a href="registrarUser.php">
              <i class="fa-solid fa-circle"></i><span>Registrar</span>
            </a>
          </li>
        </ul>
      </li><!-- End instructores Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#GestionVentas-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-boxes-stacked"></i>
          <span>Gestión de Ventas</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="GestionVentas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="consultarVentas.php">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Pedidos-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-truck"></i>
          <span>Gestión de Pedidos</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="Pedidos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="consultarPedidos.php">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>

        </ul>
      </li><!-- End programas de formacion Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Inventario-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-receipt"></i>
          <span>Gestión de Inventario</span><i class="fa-solid fa-chevron-down ms-auto"></i>
        </a>
        <ul id="Inventario-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="consultarInventario.php">
              <i class="fa-solid fa-circle"></i><span>Consultar</span>
            </a>
          </li>

        </ul>
      </li><!-- End programas de formacion Nav -->

  </aside><!-- End Sidebar-->
  <?php
}

function cargarFooterAdmin()
{
  echo '
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Loviing Store</span></strong>. Todos los derechos reservados
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer><!-- End Footer -->
  ';
}

// PERFIL DEL ADMIN
function cargarCardPerfilAdmin()
{

  $idUser = $_SESSION["idUser"];

  $objConsultasAdmin = new ConsultasAdmin();

  $f = $objConsultasAdmin->consultarUser($idUser);

  echo '
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../../Uploads/Usuarios/' . $f["foto_usuario"] . '" alt="Profile" class="rounded-circle">
              <h2>' . $f["nombre_usuario"] . '</h2>
              <h3>' . $f["rol_usuario"] . '</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
  ';
}

function cargarOverviewAdmin()
{

  $idUser = $_SESSION["idUser"];

  $objConsultasAdmin = new ConsultasAdmin();

  $tablaUsuario = $objConsultasAdmin->consultarUser($idUser);

  echo '
                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                  <h5 class="card-title">Detalles del Perfil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nombre</div>
                    <div class="col-lg-9 col-md-8">' . $tablaUsuario["nombre_usuario"] . '</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Genero</div>
                    <div class="col-lg-9 col-md-8">' . $tablaUsuario["genero"] . '</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Fecha de Nacimiento</div>
                    <div class="col-lg-9 col-md-8">' . $tablaUsuario["fecha_nacimiento"] . '</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Tipo de Doc</div>
                    <div class="col-lg-9 col-md-8">' . $tablaUsuario["tipo_documento"] . '</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Número de Doc</div>
                    <div class="col-lg-9 col-md-8">' . $tablaUsuario["num_documento"] . '</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">' . $tablaUsuario["email_usuario"] . '</div>
                  </div>

                </div>
  ';
}

function cargarEditarPerfilAdmin()
{

  $idUser = $_SESSION["idUser"];

  $objConsultasAdmin = new ConsultasAdmin();

  // TBL USUARIOS
  $tablaUsuario = $objConsultasAdmin->consultarUser($idUser);

  $tablaUsuarios = $objConsultasAdmin->consultarUsers();

  echo '
                  <form action="../../Controllers/Administrador/editarPerfilAdmin.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Imagen de Perfil</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="../../Uploads/Usuarios/' . $tablaUsuario["foto_usuario"] . '" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="../../Controllers/Administrador/eliminarUser.php?idUser=' . $tablaUsuario["id_usuario"] . '" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                              class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="nombre_usuario" class="col-md-4 col-lg-3 col-form-label">Nombre</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nombre_usuario" type="text" class="form-control" id="nombre_usuario" value="' . $tablaUsuario["nombre_usuario"] . '">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="genero" class="col-md-4 col-lg-3 col-form-label">Genero</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="genero" type="text" class="form-control" id="genero" value="' . $tablaUsuario["genero"] . '">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fecha_nacimiento" class="col-md-4 col-lg-3 col-form-label">Fecha de Nacimiento</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" value="' . $tablaUsuario["fecha_nacimiento"] . '">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="tipo_documento" class="col-md-4 col-lg-3 col-form-label">Tipo de Documento</label>
                      
                      <div class="col-md-8 col-lg-9">
                        <select class="form-control" name="tipo_documento">
                          <option value="' . $tablaUsuario["tipo_documento"] . '">' . $tablaUsuario["tipo_documento"] . '</option>

                          <option value="C.C">C.C</option>
                          <option value="T.I">T.I</option>
                          <option value="DNI">DNI</option>
                          <option value="NIE">NIE</option>
                          <option value="Pasaporte">Pasaporte</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="num_documento" class="col-md-4 col-lg-3 col-form-label">Número de Doc</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="num_documento" type="number" class="form-control" id="num_documento" value="' . $tablaUsuario["num_documento"] . '" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email_usuario" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email_usuario" type="email" class="form-control" id="email_usuario" value="' . $tablaUsuario["email_usuario"] . '">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
  ';
}



function cargarEditarPerfilAdminContraseña(){
  $idUser = $_SESSION["idUser"];

  $objConsultasAdmin = new ConsultasAdmin();

  // TBL USUARIOS
  $tablaUsuario = $objConsultasAdmin->consultarUser($idUser);

  ?>

  <!-- Change Password Form -->
  <form action="../../Controllers/Administrador/cambiarContrasena.php">

    <div class="form-group" style="display: none;">
      <label for="first-name">Número de documento</label>
      <input type="number" class="form-control" id="first-name"
        value="<?php echo $tablaUsuario["num_documento"] ?>" name="numDoc" readonly>
    </div>
    <div class="row mb-3">
      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Clave actual</label>
      <div class="col-md-8 col-lg-9">
        <input name="contrasenaActual" type="password" class="form-control" id="currentPassword" required>
      </div>
    </div>

    <div class="row mb-3">
      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Clave nueva</label>
      <div class="col-md-8 col-lg-9">
        <input name="contrasenaNueva" type="password" class="form-control" id="newPassword" required>
      </div>
    </div>

    <div class="row mb-3">
      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Vuelve a ingresarla</label>
      <div class="col-md-8 col-lg-9">
        <input name="contrasenaNuevaVerificar" type="password" class="form-control" id="renewPassword" required>
      </div>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Change Password</button>
    </div>
  </form><!-- End Change Password Form -->

  <?php
}