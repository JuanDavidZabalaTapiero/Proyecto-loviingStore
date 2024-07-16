<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section id="iniciosesion">
        <div class="fondo">

        </div>
        <div class="contenedor">

            <a href="../../index.php"><img src="img/logo.png" alt="logo candado"></a>

            <h3>Inicia sesión ahora</h3>

            <form action="../../Controllers/iniciarSesion.php" method="post">

                <label for="emailUsuario">Correo Electrónico *</label><br>
                <input name="emailUser" type="email" id="nombreUsuario" class="formato"
                    placeholder="Ingrese su email" required><br>

                <label for="contraseña">Contraseña *</label><br>
                <input name="claveUser" type="password" id="contraseña" class="formato"
                    placeholder="Ingrese su contraseña" required><br>

                <input name="checkbox" type="checkbox" id="check" class="check">
                <label for="check" class="checklabel">Recordar datos</label><br>

                <button type="submit">Acceder</button><br>

                <a id="crear" href="crearCuenta.html">¿No tienes una cuenta?</a>
                <a href="recuperarClave.php">¿se te olvidó tu contraseña?</a>
            </form>

        </div>
    </section>
</body>

</html>