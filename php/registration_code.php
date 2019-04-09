<?php

	require_once('includes/connection.php');

	$naam = $adres = $woonplaats = $postcode = $klantnummer = $pizzapunten = $mail = $password = $pwd = '';

	$naam = $_POST['naam'];

	$adres = $_POST['adres'];

	$woonplaats = $_POST['woonplaats'];

	$postcode = $_POST['postcode'];

	$klantnummer = mt_rand(10,10000000);

	$pizzapunten = 0;

	$mail = $_POST['mail'];

	$pwd = $_POST['pwd'];

	$password = MD5($pwd);
	

	$sql = "INSERT INTO klant (Klantnummer,Naam,Adres,Woonplaats,Postcode,Pizzapunten,Mail,Wachtwoord) 

			VALUES ('$klantnummer','$naam','$adres','$woonplaats','$postcode','$pizzapunten','$mail','$password')";

	$result = mysqli_query($conn, $sql);

	if($result)

	{

		header("Location: index.php");

	}

	else

	{

		echo "Error :".$sql;

	}	

?>