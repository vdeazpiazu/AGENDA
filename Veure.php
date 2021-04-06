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

    <?php
        include "classes/Persona.php";
        session_start();

        //visualitzar l'agenda
        $_SESSION["Agenda"];

        for ($n=0; $n<count($_SESSION["Agenda"]); $n++) {
            echo "<p>".$n.". ".$_SESSION["Agenda"][$n]->nom." ".$_SESSION["Agenda"][$n]->cognom." ".$_SESSION["Agenda"][$n]->telf."</p>";
        }

        echo "<p><a href='Index.php'>Tornar a l'Agenda</a></p>";
    ?>

</body>
</html>