<?php
	include ("conexion.php");

	 $connect = mysql_connect("$host", "$user", "$pass");
     mysql_select_db("$db", $connect);

	$email = $_POST['email'];
	$contrasena = $_POST['pass']; 
	
	
	$result = mysql_query("SELECT * FROM registro WHERE email='$email' and password='$contrasena'");
		$cant = 0;
        while($row=mysql_fetch_array($result)){
            $cant++;
        }
		if($cant==0){
			echo "no pasa";
		}else{
			echo "pasa";
		}
			
?>