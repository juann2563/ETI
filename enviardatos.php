<?php
	//Obtiene los datos enviados desde el nodemcu y los guarda en la base de datos
	$chipid = $_POST ['chipid'];
	$temperatura = $_POST ['temperatura'];
	try{
		$base = new PDO('mysql:host=localhost; dbname=tutorial','root','');
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO tabla (chipId, temperatura) VALUES ('".$chipid."','".$temperatura."')";	
		$base->query($sql)
	}catch(Exception $e){
		
	}
?>