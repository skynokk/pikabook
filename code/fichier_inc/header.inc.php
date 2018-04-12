<?php
echo "<!DOCTYPE html>
<html>
	<head>
		<meta charset=\"utf-8\">
	    <title>Pika Book</title>
	    <link rel=\"stylesheet\" href=\"../pikabook.css\">
	</head>

	<body>
	<header>
		<div >
			<h1><img class=\"logo\" src=\"../../Images/logo4_1.png\" alt=\"\"/></h1>

		     <div id=\"searchbar\">
		        <input class=\"champ\" type=\"text\" placeholder=\"Search...\"/>
		        <input class=\"bouton\" type=\"button\" value=\"&#128269; \" />
		    </div>

		    <div class=\"page\">
				<div class=\"cadre\">
					<nav>
						<li><a class=\"navigator\" href=\"../index.php\">Présentation</a></li>
						<li><a class=\"navigator\" href=\"../page_livre/pagelivre.php\">Livres</a></li>
						<li><a class=\"navigator\" href=\"../best_seller/bestseller.php\">Les Best-Sellers</a></li>
						<li><a class=\"navigator\" href=\"#\">Les derniers ajouts</a></li>
						<li><a class=\"navigator\" href=\"../user/utilisateur.php\">Mon compte</a></li>
					</nav>
		</div>
	</header>";
?>
