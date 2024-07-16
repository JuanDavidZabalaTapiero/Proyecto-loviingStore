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

            <h3>Recuperar Clave</h3>

            <form action="../../Controllers/recuperarClave.php" method="post">

                <label for="numIden">Num Identificación *</label><br>
                <input name="numIden" type="number" id="numIden" class="formato"
                    placeholder="Ingrese su número de identificación" required><br>

                <label for="emailUser">Correo Electrónico *</label><br>
                <input name="emailUser" type="email" id="emailUser" class="formato" placeholder="Ingrese su email"
                    required><br>

                <button type="submit">Recuperar</button><br>

                <a id="crear" href="crearCuenta.html">¿No tienes una cuenta?</a>
            </form>

        </div>
    </section>
</body>

</html>