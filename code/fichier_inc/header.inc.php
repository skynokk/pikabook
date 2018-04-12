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

		<form method=\"POST\" action=\"\">
			 <label for=\"nom\" class=\"label\">Pseudo : </label>
				<input type=\"text\" id=\"pseudoconn\" placeholder=\"Pseudo\" />
				<label for=\"mdp\">Mot de passe : </label>
				<input type=\"password\" id=\"mdp\" name=\"mdpconn\" placeholder=\"Mot de Passe\"/>
			 <input type=\"submit\" name=\"valider\" value=\"Valider\">
		</form>

		<input type=\"button\" class=\"co\" value=\"Inscription\" onclick=\"window.location.href='../connexion_inscription/connexioninscription.php';\" /><br/>

			<h1><img class=\"logo\" src=\"../../Images/logo4_1.png\" alt=\"\"/></h1>

		     <div id=\"searchbar\">
		        <input class=\"champ\" type=\"text\" placeholder=\"Search...\"/>
		        <input class=\"bouton\" type=\"button\" value=\"&#128269; \" />
		    </div>

		    <div class=\"page\">
				<div class=\"cadre\">
					<nav>
						<li><a class=\"navigator\" href=\"../index.php\">Présentation</a></li>
						<li><a class=\"navigator\" href=\"../a_la_une/alaune.php\">A la Une</a></li>
						<li><a class=\"navigator\" href=\"../page_livre/pagelivre.php\">Livres</a></li>
						<li><a class=\"navigator\" href=\"../best_seller/bestseller.php\">Les Best-Sellers</a></li>
						<li><a class=\"navigator\" href=\"../derniers_ajouts/derniersajouts.php\">Les derniers ajouts</a></li>
						<li><a class=\"navigator\" href=\"../user/utilisateur.php\">Mon compte</a></li>
					</nav>
		</div>
	</header>";
?>
