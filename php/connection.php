<?php
	$conn = mysqli_connect("localhost","test","test12345","pizzasopranos");
	if(!$conn)
	{
		echo "Database connection faild...";
	}
?>