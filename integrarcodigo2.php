<?php
$autor ="Pablo Miguel";  
$titulo ="HTML-5 y php";
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">

	<meta http-equiv="x-ua-compatible" content="ie=adge">
	<meta name="viewpor" content="width=device=width,
	initial-scale=1, shrink-to-fit=no">



	<title>Documentacion de codigo php con html</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

	<div>
		<header>

			<h1> Integracion de codigo ejercicio numero 2</h1>
               <!--<HTML-5</h1>-->
			<h1><?php echo $titulo;?></h1>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</header>


	</div>

	<div>
		<nav>

			<p><a href="http://www.youtube.com">youtube</a></p>
			<br>
			<p><a href="#">contacto</a></p>
			
			</nav>

	</div>

	<div>
		<h3>Cuerpo principal de la pagina</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<br>
		<br>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<br>
	</div>

	<footer>
		<!--&copy es para el simbolo del copyright-->
		 <!--<p>&copy; copyright:by zahira donaji</p>-->
		
		<p>&copy; copyright:<?php echo $autor;  ?></p>
		<a href="#">curso: de porque mi mejor amiga es hermosa
		</a>

	</footer>
	<img src="img/taco.jpeg" width="50">
</body>
</html>