<?php
$servername="192.168.1.29"
$username="root"
$pasword=""
$dbname="shop_manager_db"

$conn = new mysqli ($servername, $username, $pasword, $dbname) ;

if ($db->connection_error) {


    echo "fallo la conexion a la base de datos ";


}
