<?php
class ConexionBd
{
    public function getConexion()
    {

        $host = "";

        $dbName = "loviing store";

        $user = "root";

        $pass = "";

        $conexion = new PDO("mysql:host=$host;dbname=$dbName;", $user, $pass);

        return $conexion;
    }
}