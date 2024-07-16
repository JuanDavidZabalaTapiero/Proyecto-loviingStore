<?php

// SIN INICIAR SESIÓN
function mostrarProductosInicio(){

    $objConsultasAdmin = new ConsultasAdmin();

	$objConsultasCliente = new ConsultasCliente();

    $tablaProductos = $objConsultasAdmin->consultarProductos();

    foreach ($tablaProductos as $f) {

		$cod_producto = $f["id_producto"];

		$tblRate = $objConsultasCliente->consultarRateProducto($cod_producto);

        echo '
                        <div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<a href="Views/Website_externo/single.php?idProd='.$f["id_producto"].'">
											<img class="card-img-top img-fluid"
												src="Uploads/Productos/'.$f["foto1_producto"].'"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="Views/Website_externo/single.php?idProd='.$f["id_producto"].'">'.$f["nombre_producto"].'</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="Views/Website_externo/single.php?idProd='.$f["id_producto"].'"><i class="fa fa-folder-open-o"></i>'.$f["nombre_categoria"].'</a>
											</li>
										</ul>
										<h4>$ '.$f["precio_producto"].'</h4>
										<p class="card-text">'.$f["descripcion_producto"].'</p>
										<div class="product-ratings">
											<ul class="list-inline">';
											
											$filas = $tblRate['filas'];

											if ($filas == 1) {

												$resultado = $tblRate['resultado'];

												for ($i=0; $i < $resultado["estrellas"]; $i++) { 
													echo '
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													';
												}
	
												$restantes = 5 - $i;
	
												for ($r=0; $r < $restantes; $r++){
													echo '
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													';
												}
	
											} else {

												$suma = 0;

												$cantidad = 0;

												$resultados = $tblRate['resultados'];

												foreach ($resultados as $rate) {
													$suma = $suma + $rate["estrellas"];

													$cantidad++;
												}

												$promedio = round($suma / $cantidad);

												for ($i=0; $i < $promedio; $i++) { 
													echo '
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													';
												}

												$restantes = 5 - $promedio;

												for ($r=0; $r < $restantes; $r++) { 
													echo '
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													';
												}
											}

												echo '
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
        ';
        
    }
}

function mostrarProductoSingle($id_producto){

	$objConsultasAdmin = new ConsultasAdmin();
	$objConsultasCliente = new ConsultasCliente();

	$tablaProducto = $objConsultasAdmin->consultarProducto($id_producto);

	$cod_producto = $tablaProducto["id_producto"];

	$tblRate = $objConsultasCliente->consultarRateProducto($cod_producto);

	echo '
	<div class="contenedor">
        <div class="img">
            <img src="../../Uploads/Productos/'.$tablaProducto["foto1_producto"].'"
                alt="">
        </div>

        <div class="info">
            <h2>'.$tablaProducto["nombre_producto"].'</h2>

            <div class="estrellas">
				<ul>
			';

			$filas = $tblRate['filas'];

			if ($filas == 1) {

				$resultado = $tblRate['resultado'];

				for ($i=0; $i < $resultado["estrellas"]; $i++) { 
					echo '
					<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
					';
				}

				$restantes = 5 - $i;

				for ($r=0; $r < $restantes; $r++){
					echo '
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					';
				}

			} else {

				$suma = 0;

				$cantidad = 0;

				$resultados = $tblRate['resultados'];

				foreach ($resultados as $rate) {
					$suma = $suma + $rate["estrellas"];

					$cantidad++;
				}

				$promedio = round($suma / $cantidad);

				for ($i=0; $i < $promedio; $i++) { 
					echo '
					<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
					';
				}

				$restantes = 5 - $promedio;

				for ($r=0; $r < $restantes; $r++) { 
					echo '
					<li class="list-inline-item no"><i class="fa fa-star"></i></li>
					';
				}
			}

			echo '

				</ul>
            </div>

            <h2>$ '.$tablaProducto["precio_producto"].'</h2>

            <div class="cantidad">
                <button class="menos">-</button>
                <span>1</span>
                <button class="mas">+</button>
            </div>

            <span class="stock">En stock: '.$tablaProducto["stock"].'</span>

			<a href="../Extras/iniciarSesion.php">
				<button class="agregarCarrito">Agregar al carrito 🛒</button>
			</a>

			<a href="../Extras/iniciarSesion.php">
				<button class="comprarAhora">Comprar ahora 🛍️</button>
			</a>
        </div>

        <div class="desc">
            <h2>Descripción</h2>
            <p>'.$tablaProducto["descripcion_producto"].'</p>
        </div>
    </div>
	';
}

// CLIENTE (INICIO DE SESIÓN)
function mostrarProductosInicioCliente(){

    $objConsultasAdmin = new ConsultasAdmin();

	$objConsultasCliente = new ConsultasCliente();

    $tablaProductos = $objConsultasAdmin->consultarProductos();

    foreach ($tablaProductos as $f) {

		$cod_producto = $f["id_producto"];

		$tblRate = $objConsultasCliente->consultarRateProducto($cod_producto);

        echo '
                        <div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<a href="single.php?idProd='.$f["id_producto"].'">
											<img class="card-img-top img-fluid"
												src="../../Uploads/Productos/'.$f["foto1_producto"].'"
												alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.php?idProd='.$f["id_producto"].'">'.$f["nombre_producto"].'</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.php?idProd='.$f["id_producto"].'"><i class="fa fa-folder-open-o"></i>'.$f["nombre_categoria"].'</a>
											</li>
										</ul>
										<h4>$ '.$f["precio_producto"].'</h4>
										<p class="card-text">'.$f["descripcion_producto"].'</p>
										<div class="product-ratings">
											<ul class="list-inline">';
											$filas = $tblRate['filas'];

											if ($filas == 1) {

												$resultado = $tblRate['resultado'];

												for ($i=0; $i < $resultado["estrellas"]; $i++) { 
													echo '
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													';
												}
	
												$restantes = 5 - $i;
	
												for ($r=0; $r < $restantes; $r++){
													echo '
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													';
												}
	
											} else {

												$suma = 0;

												$cantidad = 0;

												$resultados = $tblRate['resultados'];

												foreach ($resultados as $rate) {
													$suma = $suma + $rate["estrellas"];

													$cantidad++;
												}

												$promedio = round($suma / $cantidad);

												for ($i=0; $i < $promedio; $i++) { 
													echo '
													<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
													';
												}

												$restantes = 5 - $promedio;

												for ($r=0; $r < $restantes; $r++) { 
													echo '
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													';
												}
											}

												echo '
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
        ';
        
    }
}

function mostrarProductoSingleCliente($id_producto){

	$objConsultasAdmin = new ConsultasAdmin();

	$objConsultasCliente = new ConsultasCliente();

	$tablaProducto = $objConsultasAdmin->consultarProducto($id_producto);

	$cod_producto = $tablaProducto["id_producto"];

	$tblRate = $objConsultasCliente->consultarRateProducto($cod_producto);

	echo '
	<div class="contenedor">
        <div class="img">
            <img src="../../Uploads/Productos/'.$tablaProducto["foto1_producto"].'"
                alt="">
        </div>

        <div class="info">
            <h2>'.$tablaProducto["nombre_producto"].'</h2>

            <div class="estrellas">
				<ul>
			';

			$filas = $tblRate['filas'];

			if ($filas == 1) {

				$resultado = $tblRate['resultado'];

				for ($i=0; $i < $resultado["estrellas"]; $i++) { 
					echo '
					<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
					';
				}

				$restantes = 5 - $i;

				for ($r=0; $r < $restantes; $r++){
					echo '
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					';
				}

			} else {

				$suma = 0;

				$cantidad = 0;

				$resultados = $tblRate['resultados'];

				foreach ($resultados as $rate) {
					$suma = $suma + $rate["estrellas"];

					$cantidad++;
				}

				$promedio = round($suma / $cantidad);

				for ($i=0; $i < $promedio; $i++) { 
					echo '
					<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
					';
				}

				$restantes = 5 - $promedio;

				for ($r=0; $r < $restantes; $r++) { 
					echo '
					<li class="list-inline-item no"><i class="fa fa-star"></i></li>
					';
				}
			}

			echo '

				</ul>
            </div>

            <h2>$ '.$tablaProducto["precio_producto"].'</h2>

            <div class="cantidad">
                <button class="menos">-</button>
                <span>1</span>
                <button class="mas">+</button>
            </div>

            <span class="stock">En stock: '.$tablaProducto["stock"].'</span>

			<a href="../../Controllers/Cliente/agregarProductoCarrito.php?codProd='.$tablaProducto["id_producto"].'">
				<button class="agregarCarrito">Agregar al carrito 🛒</button>
			</a>

			<a href="">
				<button class="comprarAhora">Comprar ahora 🛍️</button>
			</a>
        </div>

        <div class="desc">
            <h2>Descripción</h2>
            <p>'.$tablaProducto["descripcion_producto"].'</p>
        </div>
    </div>
	';
}