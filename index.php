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
			<h2>Agenda amb objectes</h2>
			<p><a href="Veure.php">Veure l'agenda</a></p>
			<p><a href="Afegir.php">Afegir contacte</a></p>
			<p><a href="Eliminar.php">Eliminar contacte</a></p>
		
		<?php
			include "classes/Persona.php";
			session_start();

			//comprobem si existeix la variable de sessió agenda

			if (!isset($_SESSION["Agenda"])) {
				$_SESSION["Agenda"] = [];
				echo "<p>Agenda inicialitzada</p>";
			}
		?>
		</article>
	</section>
	<footer></footer>
</body>
</html>