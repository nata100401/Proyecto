<?php
	try{

		$base=new PDO("mysql:host:localhost; dbname=bdmultimarcas", "root","");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET UTF8");

	}catch(Exception $e){
		//die('Error ' . $e->getMessage());
		echo "Error en la línea....... " . $e->getLine();
	}
?>