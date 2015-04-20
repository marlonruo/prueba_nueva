<?php
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include ("conexion.php");

	 $connect = mysql_connect("$host", "$user", "$pass");
     mysql_select_db("$db", $connect);

	 $numas = $_POST['numas'];

    $result = mysql_query("SELECT * FROM comida ORDER BY id DESC LIMIT $numas,4");
        $cant = 0;
        while($row=mysql_fetch_array($result)){
            echo "Comentario$cant=$row[comentario]&";
			echo "Nombre$cant=$row[nombre]&";
			echo "Edad$cant=$row[edad]&";
            $cant++;
        }
        echo "cant=$cant";
?>