<?php

// SIN INICIAR SESIÓN
function mostrarHeader()
{

	?>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="../../index.php">
							<h2>Loviing Store</h2>
						</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="../../index.php">Inicio</a>
								</li>

								<li class="nav-item dropdown dropdown-slide @@pages">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
										Contenido <span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<ul class="dropdown-menu">
										<li><a class="dropdown-item @@about" href="about-us.php">Sobre nosotros</a></li>

										<li><a class="dropdown-item @@contact" href="contact-us.php">Contácto</a></li>

										<li><a class="dropdown-item @@terms" href="terms-condition.php">Términos y
												Condiciones</a></li>
									</ul>
								</li>

								<li>
									<a href="../Extras/iniciarSesion.php">
										<svg xmlns="http://www.w3.org/2000/svg" height="32" width="36"
											viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
											<path fill="#ca5d1e"
												d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
										</svg>
									</a>
								</li>
							</ul>

							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
									<a class="nav-link login-button" href="../Extras/iniciarSesion.php">Login</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white add-button"
										href="../Extras/crearCuenta.html">Registrarse</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<?php
}

function mostrarCategorias()
{

	$objConsultasAdmin = new ConsultasAdmin();

	$tblCategorias = $objConsultasAdmin->consultarCategorias();

	foreach ($tblCategorias as $categoria) {
		echo '
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<img src="' . $categoria["icono"] . '" width="40px">
									<h4>' . $categoria["nombre_categoria"] . '</h4>
								</div>
							</div>
						</div>
		';
	}
}

// SESIÓN INICIADA
function mostrarHeaderCliente()
{
	$idUser = $_SESSION["idUser"];

	$objConsultasAdmin = new ConsultasAdmin();

	$tablaIndUsuario = $objConsultasAdmin->consultarUser($idUser);

	// Para el id del carrito
	$objConsultasCliente = new ConsultasCliente();

	$tblIndCarrito = $objConsultasCliente->consultarCarrito($idUser);

	if (is_array($tblIndCarrito)) {

		$id_carrito = $tblIndCarrito["id_carrito"];

		// Número de elementos en el carrito del Cliente
		$numElementosCarrito = $objConsultasCliente->consultarNumElementosCarrito($id_carrito);

		echo '
	<header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light navigation">
                        <a class="navbar-brand" href="home.php">
                            <h2>Loviing Store</h2>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="home.php">Inicio</a>
                                </li>

                                <li class="nav-item dropdown dropdown-slide @@pages">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Contenido <span><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <!-- Dropdown list -->
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item @@about" href="about-us.php">Sobre nosotros</a></li>

                                        <li><a class="dropdown-item @@contact" href="contact-us.php">Contácto</a></li>

                                        <li><a class="dropdown-item @@terms"
                                                href="terms-condition.php">Términos y
                                                Condiciones</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="navbar-nav ml-auto mt-10 d-flex align-items-center">
                                <li class="nav-item dropdown pe-3">
                                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="user-profile.php"
                                        data-bs-toggle="dropdown">
                                        <img src="../../Uploads/Usuarios/' . $tablaIndUsuario["foto_usuario"] . '" alt="Profile" class="rounded border mr-2"
                                            width="70px" style="max-height: 50px; object-fit: contain; object-position: center;">
                                        <span class="d-none d-md-block dropdown-toggle ps-2">' .
			$tablaIndUsuario["nombre_usuario"] . '</span>
                                    </a><!-- End Profile Iamge Icon -->

                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                        <li class="dropdown-header">
                                            <h6>' . $tablaIndUsuario["nombre_usuario"] . '</h6>
                                            <span>' . $tablaIndUsuario["rol_usuario"] . '</span>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="user-profile.php">
                                                <i class="bi bi-person"></i>
                                                <span>Mi perfil</span>
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="../../Controllers/cerrarSesion.php">
                                                <i class="bi bi-box-arrow-right"></i>
                                                <span>Cerrar Sesión</span>
                                            </a>
                                        </li>

                                    </ul><!-- End Profile Dropdown Items -->
                                </li><!-- End Profile Nav -->

                                <li class="nav-item">
                                    <a class="btn position-relative" href="carrito.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="32" width="36"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path fill="#ca5d1e"
                                                d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                        </svg>
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            ';

		if ($numElementosCarrito == 0) {
			echo '0';
		} else {
			echo $numElementosCarrito;
		}

		echo '
                                        </span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
		';

	} else {
		$numElementosCarrito = 0;
		echo '
		<header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light navigation">
                        <a class="navbar-brand" href="home.php">
                            <h2>Loviing Store</h2>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="home.php">Inicio</a>
                                </li>

                                <li class="nav-item dropdown dropdown-slide @@pages">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Contenido <span><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <!-- Dropdown list -->
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item @@about" href="about-us.php">Sobre nosotros</a></li>

                                        <li><a class="dropdown-item @@contact" href="contact-us.php">Contácto</a></li>

                                        <li><a class="dropdown-item @@terms"
                                                href="terms-condition.php">Términos y
                                                Condiciones</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="navbar-nav ml-auto mt-10 d-flex align-items-center">
                                <li class="nav-item dropdown pe-3">
                                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="user-profile.php"
                                        data-bs-toggle="dropdown">
                                        <img src="../../Uploads/Usuarios/' . $tablaIndUsuario["foto_usuario"] . '" alt="Profile" class="rounded border mr-2"
                                            width="70px">
                                        <span class="d-none d-md-block dropdown-toggle ps-2">' .
			$tablaIndUsuario["nombre_usuario"] . '</span>
                                    </a><!-- End Profile Iamge Icon -->

                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                        <li class="dropdown-header">
                                            <h6>' . $tablaIndUsuario["nombre_usuario"] . '</h6>
                                            <span>' . $tablaIndUsuario["rol_usuario"] . '</span>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="user-profile.php">
                                                <i class="bi bi-person"></i>
                                                <span>Mi perfil</span>
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <a class="dropdown-item d-flex align-items-center"
                                                href="../../Controllers/cerrarSesion.php">
                                                <i class="bi bi-box-arrow-right"></i>
                                                <span>Cerrar Sesión</span>
                                            </a>
                                        </li>

                                    </ul><!-- End Profile Dropdown Items -->
                                </li><!-- End Profile Nav -->

                                <li class="nav-item">
                                    <a class="btn position-relative" href="carrito.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="32" width="36"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path fill="#ca5d1e"
                                                d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                        </svg>
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            ' . $numElementosCarrito . '
                                        </span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
		';
	}
}

function mostrarPerfilCliente()
{

	$idUser = $_SESSION["idUser"];

	$objConsultasAdmin = new ConsultasAdmin();

	$tblUser = $objConsultasAdmin->consultarUser($idUser);

	?>
	<section class="user-profile section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="sidebar">
						<!-- User Widget -->
						<div class="widget user">
							<!-- User Image -->
							<div class="image d-flex justify-content-center">
								<img src="../../Uploads/Usuarios/<?php echo $tblUser["foto_usuario"] ?>" alt=""
									class="w-100 h-100 rounded">
							</div>
							<!-- User Name -->
							<h5 class="text-center"><?php echo $tblUser["nombre_usuario"] ?></h5>
						</div>
					</div>
				</div>

				<div class="col-lg-8">
					<!-- Edit Profile Welcome Text -->
					<div class="widget welcome-message">
						<h2>Editar Perfil</h2>
						<p>En este apartado puedes cambiar tu información personal, contraseña, email y foto de perfil sin
							ningún problema. 😊</p>
					</div>
					<!-- Edit Personal Info -->
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="widget personal-info">

								<!-- INFO PERSONAL -->
								<h3 class="widget-header user">Información Personal</h3>
								<form action="" method="post" enctype="multipart/form-data">
									<input type="hidden" name="form" value="personal-info-client">

									<!-- First Name -->
									<div class="form-group">
										<label for="first-name">Nombre de usuario</label>
										<input type="text" name="nombre_cliente" class="form-control" id="first-name"
											value="<?php echo $tblUser["nombre_usuario"] ?>">
									</div>

									<!-- Last Name -->
									<div class="form-group">
										<label for="last-name">Género</label>
										<select class="w-100" name="genero_cliente">
											<option value="<?php echo $tblUser["genero"] ?>">
												<?php echo $tblUser["genero"] ?>
											</option>
											<option value="Masculino">Masculino</option>
											<option value="Femenino">Femenino</option>
											<option value="Otro">Otro</option>
										</select>
									</div>

									<div class="form-group">
										<label for="first-name">Fecha de nacimiento</label>
										<input type="date" name="fecha_nacimiento_cliente" class="form-control"
											id="first-name" value="<?php echo $tblUser["fecha_nacimiento"] ?>">
									</div>

									<div class="form-group">
										<label for="first-name" class="d-block">Tipo de documento</label>
										<select class="w-100" name="tipo_doc_cliente">
											<option value="<?php echo $tblUser["tipo_documento"] ?>">
												<?php echo $tblUser["tipo_documento"] ?>
											</option>
											<option value="C.C">C.C</option>
											<option value="T.I">T.I</option>
											<option value="DNI">DNI</option>
											<option value="NIE">NIE</option>
											<option value="Pasaporte">Pasaporte</option>
										</select>
									</div>

									<div class="form-group">
										<label for="first-name">Número de documento</label>
										<input type="number" name="num_documento" class="form-control" id="first-name"
											value="<?php echo $tblUser["num_documento"] ?>" readonly>
									</div>

									<!-- File chooser -->
									<label for="input-file">Foto de perfil</label>
									<div class="form-group choose-file d-inline-flex">
										<i class="fa fa-user text-center px-3"></i>
										<input type="file" name="img_perfil_cliente" class="form-control-file mt-2 pt-1"
											id="input-file" accept=".jpg, .jpeg, .png, .gif, .webp">
									</div>

									<!-- Submit button -->
									<button class="btn btn-transparent">Guardar cambios</button>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<!-- Change Password -->
							<div class="widget change-password">
								<h3 class="widget-header user">Editar Contraseña</h3>
								<form action="../../Controllers/Cliente/cambiarContrasena.php">
									<div class="form-group" style="display: none;">
										<label for="first-name">Número de documento</label>
										<input type="number" class="form-control" id="first-name"
											value="<?php echo $tblUser["num_documento"] ?>" name="numDoc" readonly>
									</div>
									<!-- Current Password -->
									<div class="form-group">
										<label for="current-password">Ingrese su contraseña actual</label>
										<input type="password" class="form-control" id="current-password"
											name="contrasenaActual" required>
									</div>
									<!-- New Password -->
									<div class="form-group">
										<label for="new-password">Nueva contraseña</label>
										<input type="password" class="form-control" id="new-password" name="contrasenaNueva"
											required>
									</div>
									<!-- Confirm New Password -->
									<div class="form-group">
										<label for="confirm-password">Confirmar nueva contraseña</label>
										<input type="password" class="form-control" id="confirm-password"
											name="contrasenaNuevaVerificar" required>
									</div>
									<!-- Submit Button -->
									<button class="btn btn-transparent">Cambiar contraseña</button>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<!-- Change Email Address -->
							<div class="widget change-email mb-0">
								<h3 class="widget-header user">Editar Email</h3>
								<form action="#">
									<!-- Current Password -->
									<div class="form-group">
										<label for="current-email">Email actual</label>
										<input type="email" class="form-control" id="current-email"
											value="<?php echo $tblUser["email_usuario"] ?>" readonly>
									</div>
									<!-- New email -->
									<div class="form-group">
										<label for="new-email">Nuevo email</label>
										<input type="email" class="form-control" id="new-email">
									</div>
									<!-- Submit Button -->
									<button class="btn btn-transparent">Cambiar email</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
}

function mostrarCarritoCliente()
{

	$objConsultasCliente = new ConsultasCliente();

	$objConsultasAdmin = new ConsultasAdmin();

	$codUser = $_SESSION["idUser"];

	$tblCarrito = $objConsultasCliente->consultarCarrito($codUser);

	if ($tblCarrito) {
		$codCarrito = $tblCarrito["id_carrito"];

		$tblItems = $objConsultasCliente->consultarItemsCarrito($codCarrito);

		if ($tblItems) {

			$filas = $tblItems['filas'];

			if ($filas != 1) {

				$resultados = $tblItems['resultados'];

				foreach ($resultados as $item) {

					$codProducto = $item["cod_producto"];

					$tblProducto = $objConsultasAdmin->consultarProducto($codProducto);

					echo '
						<tr>
						  <td class="product-thumb p-2">
							<img width="80px" height="auto" src="../../Uploads/Productos/' . $tblProducto["foto1_producto"] . '"
							  alt="image description">
						  </td>
		
						  <td class="p-2">
							<h3 class="title">' . $tblProducto["nombre_producto"] . '</h3>
						  </td>
		
						  <td class="p-2 text-center">$ ' . $tblProducto["precio_producto"] . '</td>
		
						  <td class="p-2 text-center">
						 
						  <button class="rounded border border-0 mr-1 btnMenosCarrito">-</button>
						 
						  ' . $item["cantidad"] . '
						  
						  <button class="rounded border border-0 ml-1 btnMasCarrito">+</button>
		
						  </td>
		
						  <td class="product-category p-2 text-center"><span class="categories">' . $tblProducto["nombre_categoria"] . '</span></td>
		
						  <td class="action p-2" data-title="Action">
							<div class="">
							  <ul class="list-inline justify-content-center">
								<li class="list-inline-item">
								  <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
									<i class="fa fa-eye"></i>
								  </a>
								</li>
		
								<li class="list-inline-item">
								  <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete"
									href="dashboard.html">
									<i class="fa fa-trash"></i>
								  </a>
								</li>
							  </ul>
							</div>
						  </td>
						</tr>
				';
				}
			} else {
				$resultado = $tblItems['resultado'];

				$objConsultasAdmin = new ConsultasAdmin();

				$codProducto = $resultado["cod_producto"];

				$tblProducto = $objConsultasAdmin->consultarProducto($codProducto);

				echo '
				<tr>
						  <td class="product-thumb p-2">
							<img width="80px" height="auto" src="../../Uploads/Productos/' . $tblProducto["foto1_producto"] . '"
							  alt="image description">
						  </td>
		
						  <td class="p-2">
							<h3 class="title">' . $tblProducto["nombre_producto"] . '</h3>
						  </td>
		
						  <td class="p-2 text-center">$ ' . $tblProducto["precio_producto"] . '</td>
		
						  <td class="p-2 text-center">
						 
						  <button class="rounded border border-0 mr-1 btnMenosCarrito">-</button>
						 
						  ' . $resultado["cantidad"] . '
						  
						  <button class="rounded border border-0 ml-1 btnMasCarrito">+</button>
		
						  </td>
		
						  <td class="product-category p-2 text-center"><span class="categories">' . $tblProducto["nombre_categoria"] . '</span></td>
		
						  <td class="action p-2" data-title="Action">
							<div class="">
							  <ul class="list-inline justify-content-center">
								<li class="list-inline-item">
								  <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
									<i class="fa fa-eye"></i>
								  </a>
								</li>
		
								<li class="list-inline-item">
								  <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete"
									href="dashboard.html">
									<i class="fa fa-trash"></i>
								  </a>
								</li>
							  </ul>
							</div>
						  </td>
						</tr>
				';

			}
		} else {
			echo '<h2>No hay productos en tu carrito</h2>';
		}
	} else {
		echo '<h2>No hay productos en tu carrito</h2>';
	}

}

// GENERAL
function mostrarFooterCliente()
{
	echo '

	<!--============================
	=            Footer            =
	=============================-->

	<!-- Footer Bottom -->
	<footer class="footer-bottom">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
					<!-- Copyright -->
					<div class="copyright">
						<p>Copyright &copy;
							<script>
								var CurrentYear = new Date().getFullYear()
								document.write(CurrentYear)
							</script> - Loviing Store
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<!-- Social Icons -->
					<ul class="social-media-icons text-center text-lg-right">
						<li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
						<li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
						<li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
						<li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Container End -->
		<!-- To Top -->
		<div class="scroll-top-to">
			<i class="fa fa-angle-up"></i>
		</div>
	</footer>
	';
}

