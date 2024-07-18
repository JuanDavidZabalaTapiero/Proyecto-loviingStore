<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar con Mercado Pago</title>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>

<body>
    <div id="wallet_container"></div>
    <script>
        const mp = new MercadoPago('APP_USR-e7e61440-4cdc-4501-b63f-557a057570f8', {
            locale: 'es-CO'
        });

        // Obtener el preference_id de la URL
        const urlParams = new URLSearchParams(window.location.search);
        const preferenceId = urlParams.get('preference_id');

        // Crear el widget de pago
        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: preferenceId,
            },
        });
    </script>
</body>

</html>