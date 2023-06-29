<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	<title>Sklep muzyczny</title>
	
	<link rel="stylesheet" type="text/css" href="muzyka.css">
	
</head>
<body>
	<section id="baner">
		<h1>SKLEP MUZYCZNY</h1>
		
	</section>
	
	<section id="panel-lewy">
		<h2>Nasza Oferta</h2>
			<ol>
				<li>Instremeny muzyczne</li>
				<li>Sprzęt audio</li>
				<li>Płyty CD</li>
			</ol>
	
	</section>
	
	<section id="panel-prawy">
		<?php
			if(sizeof($_POST)>0){
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$adres = $_POST['adres'];
			$telefon = $_POST['telefon'];
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];
			
			echo "Konto ".$imie." ". $nazwisko ." zostało zarejestowane w sklepie muzycznym";
		

			
			$polaczenie = mysqli_connect("localhost","root","","sklep") or die("Nie udane połączenie!");
			
			$sql = "INSERT INTO `uzytkownicy`(`id`, `imie`, `nazwisko`, `adres`, `telefon`) VALUES ( null, '$imie', '$nazwisko', '$adres','$telefon')";
			
			$sql2 = "INSERT INTO `konta`(`id`, `login`, `haslo`) VALUES (null,'$login','$haslo')";
			
			mysqli_query($polaczenie, $sql);
			mysqli_query($polaczenie, $sql2);
			
			mysqli_close($polaczenie);
					}
					else {return;
					}
		?>
		
	
	</section>
	
	
</body>
</html>