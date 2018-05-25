<?php
	//Obtiene los datos enviados desde el nodemcu y los guarda en la base de datos
	$chipid = $_POST ['voltaje'];
	$temperatura = $_POST ['corriente'];
	try {
	$dbh = new PDO("mysql:host=localhost;dbname=tutorial",'root','');

	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
	$sql = "INSERT INTO tabla (chipId, temperatura) VALUES ('".$chipid."','".$temperatura."')";
	if ($dbh->query($sql)) {
	echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
	}
	else{
	echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
	}

	$dbh = null;
	}
	catch(PDOException $e)
	{
	echo $e->getMessage();
	}	
?>