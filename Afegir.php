<!doctype html>
<html lang="es">
<head>
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="Lorem Ipsum">
	<meta name="keywords" content="Lorem, Ipsum">
	<meta name="author" content="Lorem Ipsum">
	
	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	
	<style>

	</style>

	
	<!-- Enllaç a Javascript Extern -->
	<script  type="text/javascript" src="js/javascript.js"></script>
	
	<!-- favicon -->
	<link href="img/favicon.png" rel="icon" type="image/png" />
	
	<!-- Títol de la pàgina -->
	<title>Títol de la pàgina</title>
</head>
<body>
	<header></header>
	<section>
		<article>
			<h2>Afegir un registre nou a l'agenda</h2>
			<form method="POST" action="Afegir.php">
				<p><label>Nom: <input type="text" id="nom" name="nom" required></label></p>
				<p><label>Cognom: <input type="text" id="cognom" name="cognom" required></label></p>
				<p><label>Telèfon: <input type="text" id="telf" name="telf" required></label></p>
				<p><input name="submit" type="submit" id="myBut"></p>
			</form>
			<?php 
			include "classes/Persona.php";
			session_start();
			
			if (isset($_POST["nom"]) and isset($_POST["cognom"]) and isset($_POST["telf"])) {
				$nom = $_POST["nom"];
				$cognom = $_POST["cognom"];
				$telf = $_POST["telf"];

				$NewContacte = new Persona($nom,$cognom,$telf);

				array_push($_SESSION["Agenda"],$NewContacte);

				
				for ($n=0; $n<count($_SESSION["Agenda"]); $n++) {
					echo "<p>".$n.". ".$_SESSION["Agenda"][$n]->nom." ".$_SESSION["Agenda"][$n]->cognom." ".$_SESSION["Agenda"][$n]->telf."</p>";
				}

			} else {
				echo "<p>introdueix les dades del nou contacte</p>";
			}
		
			echo "<p><a href='Index.php'>Tornar a l'Agenda</a></p>";
			
			
			?>
		</article>
	</section>
	<footer></footer>
</body>
</html>