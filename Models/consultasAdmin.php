<?php
require_once ('conexionBd.php');
class ConsultasAdmin
{
    // USUARIOS
    public function registrarUser($nombreUser, $generoUser, $fechaNacUser, $tipoDocUser, $numDocUser, $claveUser, $emailUser, $rolUser, $estadoUser, $fotoUser, $fechaUser)
    {
        $sql = "INSERT INTO tbl_usuarios(nombre_usuario, genero, fecha_nacimiento, tipo_documento, num_documento, email_usuario, clave_usuario, rol_usuario, estado_usuario, foto_usuario, fecha_creacion) VALUES (:nombre, :genero, :fecha_nac, :tipo_doc, :num_doc, :email, :clave, :rol, :estado, :foto, :fecha)";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":nombre", $nombreUser);
        $result->bindParam(":genero", $generoUser);
        $result->bindParam(":fecha_nac", $fechaNacUser);
        $result->bindParam(":tipo_doc", $tipoDocUser);
        $result->bindParam(":num_doc", $numDocUser);
        $result->bindParam(":clave", $claveUser);
        $result->bindParam(":email", $emailUser);
        $result->bindParam(":rol", $rolUser);
        $result->bindParam(":estado", $estadoUser);
        $result->bindParam(":foto", $fotoUser);
        $result->bindParam(":fecha", $fechaUser);

        $result->execute();

        echo '
        <script>
            alert("Usuario registrado")
            location.href="../../Views/Administrador/consultarUsers.php"
        </script>
        ';
    }

    public function consultarUsers()
    {

        $sql = "SELECT * FROM tbl_usuarios";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->execute();

        $f = $result->fetchAll();

        return $f;
    }

    public function consultarUser($idUser)
    {

        $sql = "SELECT * FROM tbl_usuarios WHERE id_usuario = :idUser";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":idUser", $idUser);

        $result->execute();

        $f = $result->fetch();

        return $f;
    }

    public function eliminarUser($idUser)
    {

        $sql = "DELETE FROM tbl_usuarios WHERE id_usuario = :idUser";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":idUser", $idUser);

        $result->execute();

        echo '
        <script>
            alert("Usuario eliminado")
            location.href="../../Views/Administrador/consultarUsers.php"
        </script>
        ';
    }

    public function editarUser($nombreUser, $generoUser, $fechaNacUser, $tipoDocUser, $numDocUser, $emailUser, $rolUser, $estadoUser)
    {

        $sql = "UPDATE tbl_usuarios 
        SET nombre_usuario = :nombre, 
        genero = :genero, 
        fecha_nacimiento = :fechaNac, 
        tipo_documento = :tipoDoc, 
        email_usuario = :email, 
        rol_usuario = :rol, 
        estado_usuario = :estado 
        WHERE num_documento = :numDoc";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":nombre", $nombreUser);
        $result->bindParam(":genero", $generoUser);
        $result->bindParam(":fechaNac", $fechaNacUser);
        $result->bindParam(":tipoDoc", $tipoDocUser);
        $result->bindParam(":email", $emailUser);
        $result->bindParam(":rol", $rolUser);
        $result->bindParam(":estado", $estadoUser);
        $result->bindParam(":numDoc", $numDocUser);

        $result->execute();

        echo '
        <script>
            alert("Registro editado")
            location.href="../../Views/Administrador/consultarUsers.php"
        </script>
        ';
    }

    public function consultarClientes(){

        $sql = "SELECT COUNT(*) AS totalClientes FROM tbl_usuarios WHERE rol_usuario = 'Cliente'";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->execute();

        $f = $result->fetchALL();

        return $f;
    }

    public function editarPerfilAdmin($nombre_usuario, $genero, $fecha_nacimiento, $tipo_documento, $num_documento, $email_usuario){
        
        $sql = "UPDATE tbl_usuarios 
        SET nombre_usuario = :nombre_usuario,
        genero = :genero,
        fecha_nacimiento = :fecha_nacimiento,
        tipo_documento = :tipo_documento,
        num_documento = :num_documento,
        email_usuario = :email_usuario
        WHERE num_documento = :num_documento";
        
        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":nombre_usuario", $nombre_usuario);
        $result->bindParam(":genero", $genero);
        $result->bindParam(":fecha_nacimiento", $fecha_nacimiento);
        $result->bindParam(":tipo_documento", $tipo_documento);
        $result->bindParam(":num_documento", $num_documento);
        $result->bindParam(":email_usuario", $email_usuario);

        $result->execute();

        echo '
        <script>
            alert("Admin editado")
            location.href="../../Views/Administrador/userProfileAdmin.php"
        </script>
        ';

    }

    // CATEGORÍAS
    public function consultarCategorias()
    {

        $sql = "SELECT * FROM tbl_categorias";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->execute();

        $f = $result->fetchAll();

        return $f;
    }

    public function consultarCategoria($idCat)
    {

        $sql = "SELECT * FROM tbl_categorias WHERE id_categoria = :idCat";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":idCat", $idCat);

        $result->execute();

        $f = $result->fetch();

        return $f;
    }

    public function registrarCategoria($nombreCat, $icono)
    {

        $sql = "INSERT INTO tbl_categorias(nombre_categoria, icono) VALUES (:nombreCat, :icono)";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":nombreCat", $nombreCat);
        $result->bindParam(":icono", $icono);

        $result->execute();

        echo '
        <script>
            alert("Categoría Registrada")
            location.href="../../Views/Administrador/consultarCategorias.php"
        </script>
        ';
    }

    public function eliminarCategoria($idCat)
    {
        $sql = "DELETE FROM tbl_categorias WHERE id_categoria = :idCat";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":idCat", $idCat);

        $result->execute();

        echo '
        <script>
            alert("Categoría Eliminada")
            location.href="../../Views/Administrador/consultarCategorias.php"
        </script>
        ';
    }

    public function editarCategoria($nombreCat, $idCat)
    {
        $sql = "UPDATE tbl_categorias SET nombre_categoria = :nombreCat 
        WHERE id_categoria = :idCat";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":nombreCat", $nombreCat);
        $result->bindParam(":idCat", $idCat);

        $result->execute();

        echo '
        <script>
            alert("Categoría Actualizada")
            location.href="../../Views/Administrador/consultarCategorias.php"
        </script>
        ';
    }

    // PRODUCTOS E INVENTARIO
    public function consultarProductos()
    {
        $sql = "SELECT *, nombre_categoria, precio_producto, entradas, salidas, tbl_inventario.stock AS stock
        FROM tbl_productos 
        INNER JOIN tbl_categorias ON tbl_productos.cod_categoria = tbl_categorias.id_categoria
        INNER JOIN tbl_inventario ON tbl_productos.id_producto = tbl_inventario.cod_producto;
        ";



        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->execute();

        if ($result->rowCount() == 1) {
            return $result->fetch();
        } else {
            return $result->fetchAll();
        }
    }

    public function registrarProducto($codCat, $nombre, $desc, $precio, $stock, $fecha, $foto1_producto, $foto2_producto, $foto3_producto)
    {
        // tbl_productos
        $sql = "INSERT INTO tbl_productos
        (cod_categoria, 
        nombre_producto, 
        descripcion_producto, 
        precio_producto,
        foto1_producto,
        foto2_producto,
        foto3_producto,
        stock) 
        VALUES 
        (:codCat,
        :nombre,
        :desc,
        :precio,
        :foto1_producto,
        :foto2_producto,
        :foto3_producto,
        :stock)";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":codCat", $codCat);
        $result->bindParam(":nombre", $nombre);
        $result->bindParam(":desc", $desc);
        $result->bindParam(":precio", $precio);
        $result->bindParam(":foto1_producto", $foto1_producto);
        $result->bindParam(":foto2_producto", $foto2_producto);
        $result->bindParam(":foto3_producto", $foto3_producto);
        $result->bindParam(":stock", $stock);

        $result->execute(); 

        $cod_producto = $conexion->lastInsertId();

        // tbl_inventario
        $sql2 = "INSERT INTO tbl_inventario
        (cod_producto,
        entradas,
        salidas,  
        stock, 
        fecha) 
        VALUES 
        (:cod_producto, 
        :entradas,
        :salidas, 
        :stock, 
        :fecha)";

        $result2 = $conexion->prepare($sql2);

        // VALOR POR DEFAULT
        $salidas = 0;

        $result2->bindParam(":cod_producto", $cod_producto);
        $result2->bindParam(":entradas", $stock);
        $result2->bindParam(":salidas", $salidas);
        $result2->bindParam(":stock", $stock);
        $result2->bindParam(":fecha", $fecha);

        $result2->execute();

        echo '
        <script>
            alert("Producto registrado")
            location.href="../../Views/Administrador/consultarProductos.php"
        </script>
        ';
    }

    public function editarProducto($id_producto, $cod_categoria, $nombre_producto, $descripcion_producto, $precio_producto, $entradas, $salidas, $stock)
    {
        $sql = "UPDATE tbl_productos 
        SET cod_categoria = :cod_categoria,
        nombre_producto = :nombre_producto,
        descripcion_producto = :descripcion_producto,
        precio_producto = :precio_producto
        WHERE id_producto = :id_producto";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":cod_categoria", $cod_categoria);
        $result->bindParam(":nombre_producto", $nombre_producto);
        $result->bindParam(":descripcion_producto", $descripcion_producto);
        $result->bindParam(":precio_producto", $precio_producto);
        $result->bindParam(":id_producto", $id_producto);

        $result->execute();

        // $sql2 = "UPDATE tbl_inventario 
        // SET entradas = :entradas,
        // salidas = :salidas,
        // stock = :stock
        // WHERE cod_producto = :id_producto";

        // $result2 = $conexion->prepare($sql2);

        // $result2->bindParam(":entradas", $entradas);
        // $result2->bindParam(":salidas", $salidas);
        // $result2->bindParam(":stock", $stock);
        // $result2->bindParam(":id_producto", $id_producto);

        // $result2->execute();

        echo '
        <script>
            alert("Producto editado")
            location.href="../../Views/Administrador/consultarProductos.php"
        </script>
        ';
    }

    public function consultarProducto($id_producto)
    {
        $sql = "SELECT * 
        FROM tbl_productos 
        INNER JOIN tbl_categorias ON cod_categoria = id_categoria
        INNER JOIN tbl_inventario ON cod_producto = id_producto
        WHERE id_producto = :id_producto";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":id_producto", $id_producto);

        $result->execute();

        $f = $result->fetch();

        return $f;
    }

    public function consultarInventario($id_producto)
    {
        $sql = "SELECT * FROM tbl_inventario WHERE cod_producto = :id_producto";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":id_producto", $id_producto);

        $result->execute();

        $f = $result->fetch();

        return $f;
    }

    public function eliminarProducto($id_producto)
    {
        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $sql = "DELETE FROM tbl_inventario WHERE cod_producto = :id_producto";

        $result = $conexion->prepare($sql);

        $result->bindParam(":id_producto", $id_producto);

        $result->execute();


        $sql2 = "DELETE FROM tbl_productos WHERE id_producto = :id_producto";

        $result2 = $conexion->prepare($sql2);

        $result2->bindParam(":id_producto", $id_producto);

        $result2->execute();

        echo '
        <script>
            alert("Producto Eliminado")
            location.href="../../Views/Administrador/consultarProductos.php"
        </script>
        ';
    }

    // PROVEEDORES
    public function consultarProveedores()
    {
        $sql = "SELECT id_proveedor, nombre_empresa, representante_ventas, nombre_producto, correo_proveedor, tel_proveedor, direccion_fisica
        FROM tbl_proveedor 
        INNER JOIN tbl_productos ON cod_producto = id_producto";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->execute();

        $f = $result->fetchAll();

        return $f;
    }

    public function registrarProveedor($nombre_empresa, $representante_ventas, $cod_producto, $direccion_proveedor, $correo_proveedor, $tel_proveedor)
    {

        $sql = "INSERT INTO tbl_proveedor (
        nombre_empresa, 
        representante_ventas, 
        cod_producto, 
        direccion_fisica, 
        correo_proveedor, 
        tel_proveedor) 
        VALUES 
        (:nombre_empresa,
        :representante_ventas,
        :cod_producto,
        :direccion_fisica, 
        :correo_proveedor, 
        :tel_proveedor
        )";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":nombre_empresa", $nombre_empresa);
        $result->bindParam(":representante_ventas", $representante_ventas);
        $result->bindParam(":cod_producto", $cod_producto);
        $result->bindParam(":direccion_fisica", $direccion_proveedor);
        $result->bindParam(":correo_proveedor", $correo_proveedor);
        $result->bindParam(":tel_proveedor", $tel_proveedor);

        $result->execute();

        echo '
        <script>
            alert("Proveedor Registrado")
            location.href="../../Views/Administrador/consultarProveedores.php"
        </script>
        ';
    }

    public function editarProveedor($nombre_empresa, $representante_ventas, $cod_producto, $direccion_proveedor, $correo_proveedor, $tel_proveedor, $id_proveedor)
    {

        $sql = "UPDATE tbl_proveedor SET 
                nombre_empresa= :nombre_empresa,
                representante_ventas= :representante_ventas,
                cod_producto= :cod_producto, 
                direccion_fisica= :direccion_proveedor, 
                correo_proveedor= :correo_proveedor, 
                tel_proveedor= :tel_proveedor 
                WHERE id_proveedor = :id_proveedor";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":nombre_empresa", $nombre_empresa);
        $result->bindParam(":representante_ventas", $representante_ventas);
        $result->bindParam(":cod_producto", $cod_producto);
        $result->bindParam(":direccion_proveedor", $direccion_proveedor);
        $result->bindParam(":correo_proveedor", $correo_proveedor);
        $result->bindParam(":tel_proveedor", $tel_proveedor);
        $result->bindParam(":id_proveedor", $id_proveedor);

        $result->execute();

        echo '
        <script>
            alert("Proveedor Editado")
            location.href="../../Views/Administrador/consultarProveedores.php"
        </script>
        ';
    }

    public function consultarProveedor($id_proveedor)
    {
        $sql = "SELECT * FROM tbl_proveedor 
        WHERE id_proveedor = :id_proveedor";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":id_proveedor", $id_proveedor);

        $result->execute();

        $f = $result->fetch();

        return $f;
    }

    public function eliminarProveedor($id_proveedor)
    {

        $sql = "DELETE FROM tbl_proveedor WHERE id_proveedor = :id_proveedor";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":id_proveedor", $id_proveedor);

        $result->execute();

        echo '
        <script>
            alert("Proveedor Eliminado")
            location.href="../../Views/Administrador/consultarProveedores.php"
        </script>
        ';
    }

    // VENTAS
    public function consultarVentas()
    {

        $sql = "SELECT id_venta, nombre_producto, nombre_usuario, cantidad, fecha_venta, total, nombre_metodo, estado, foto1_producto, precio_producto, (cantidad * precio_producto) AS valor_total
        FROM tbl_ventas 
        INNER JOIN tbl_productos ON cod_producto = id_producto
        INNER JOIN tbl_usuarios ON cod_cliente = id_usuario
        INNER JOIN tbl_metodo_pago ON cod_metodo_pago = id_metodo";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->execute();

        $f = $result->fetchAll();

        return $f;
    }

    public function editarVenta($cod_producto, $cod_cliente, $cantidad, $fecha_venta, $total, $cod_metodo_pago, $estado, $id_venta)
    {
        $sql = "UPDATE tbl_ventas 
        SET cod_producto = :cod_producto,
        cod_cliente = :cod_cliente,
        cantidad = :cantidad,
        fecha_venta = :fecha_venta,
        total = :total,
        cod_metodo_pago = :cod_metodo_pago,
        estado = :estado 
        WHERE id_venta = :id_venta";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":cod_producto", $cod_producto);
        $result->bindParam(":cod_cliente", $cod_cliente);
        $result->bindParam(":cantidad", $cantidad);
        $result->bindParam(":fecha_venta", $fecha_venta);
        $result->bindParam(":total", $total);
        $result->bindParam(":cod_metodo_pago", $cod_metodo_pago);
        $result->bindParam(":estado", $estado);
        $result->bindParam(":id_venta", $id_venta);

        $result->execute();

        echo '
        <script>
            alert("Venta editada")
            location.href="../../Views/Administrador/consultarVentas.php"
        </script>
        ';
    }

    public function consultarVenta($id_venta)
    {
        $sql = "SELECT * FROM tbl_ventas 
        WHERE id_venta = :id_venta";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":id_venta", $id_venta);

        $result->execute();

        $f = $result->fetch();

        return $f;
    }

    public function eliminarVenta($id_venta){

        $sql = "DELETE FROM tbl_ventas WHERE id_venta = :id_venta";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":id_venta", $id_venta);

        $result->execute();

        echo '
        <script>
            alert("Venta Eliminada")
            location.href="../../Views/Administrador/consultarVentas.php"
        </script>
        ';
    }

    // MÉTODO DE PAGO

    public function consultarMetodoPago($id_metodo)
    {
        $sql = "SELECT * FROM tbl_metodo_pago WHERE id_metodo = :id_metodo";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":id_metodo", $id_metodo);

        $result->execute();

        $f = $result->fetch();

        return $f;
    }

    public function consultarMetodosPago()
    {
        $sql = "SELECT * FROM tbl_metodo_pago";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->execute();

        $f = $result->fetchAll();

        return $f;
    }

    public function cuantificarVentas(){
        $sql = "SELECT COUNT(*) AS ventas_en_mes FROM tbl_ventas 
        WHERE MONTH(fecha_venta) = MONTH(CURRENT_DATE()) 
        AND YEAR(fecha_venta) = YEAR(CURRENT_DATE())";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->execute();

        $f = $result->fetchAll();

        return $f;
    }

    public function valorVentasMes(){
        $sql = "SELECT ROUND(SUM(total)) AS valorMensual FROM tbl_ventas WHERE MONTH(fecha_venta) = MONTH(CURRENT_DATE()) 
        AND YEAR(fecha_venta) = YEAR(CURRENT_DATE())";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->execute();

        $f = $result->fetchAll();

        return $f;
    }
}
// HOLA, SIU
//        _
//    .__(.)< (MEOW)
//     \___) 