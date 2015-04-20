<?php
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include ("conexion.php");

	 $connect = mysql_connect("$host", "$user", "$pass");
     mysql_select_db("$db", $connect);
	 
	 $nombre = $_POST['nombre'];
	 $apellido = $_POST['apellido'];
	 $telefono = $_POST['telefono'];
	 $email = $_POST['correo'];
	 $password = $_POST['pass'];
	 $fecha = date("y-m-d");
	 
    $result = mysql_query("INSERT INTO registro (nombre, apellido, telefono, email, password, fecha) VALUES ('$nombre', '$apellido', '$telefono', '$email', '$password', '$fecha')");
	
	echo "listo";
?>