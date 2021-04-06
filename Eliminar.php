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
			<h2>Eliminar contacte de l'agenda</h2>
			<form method="POST" action="Eliminar.php">
				<p><label>ID: <input type="number" id="ID" name="ID" min="0" required></label></p>
				<p><input name="submit" type="submit" id="myBut"></p>
			</form>
			<?php 
            include "classes/Persona.php";
            session_start();
            
            if (!isset($_POST["ID"])) {
                echo "<p>Escriu un valor</p>";
                
            } else {
                $_SESSION["Agenda"];
                $_POST["ID"];
                
                //crear la funció per eliminar
                for ($n=0; $n<count($_SESSION["Agenda"]); $n++) {
                    if ($_POST["ID"] == $n) {
                        array_splice($_SESSION["Agenda"],$n,1);
                    }
                    echo "<p>".$n.". ".$_SESSION["Agenda"][$n]->nom." ".$_SESSION["Agenda"][$n]->cognom." ".$_SESSION["Agenda"][$n]->telf."</p>";
                }
            }

            echo "<p><a href='Index.php'>Tornar a l'Agenda</a></p>";
			
			
			
			?>
		</article>
	</section>
	<footer></footer>
</body>
</html>