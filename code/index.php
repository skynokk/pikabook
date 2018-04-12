<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <title>Pika Book</title>
	    <link rel="stylesheet" href="pikabook.css">
			<script type="text/javascript" src="index.js"></script>
	</head>

	<body onload="disclaimer()">
	<header>
		<div>
			<h1><img class="logo" src="../Images/logo4_1.png" alt=""/></h1>

		     <div id="searchBar">
		        <input class="champ" type="text" placeholder="Search..."/>
		        <input class="bouton" type="button" value="&#128269; " />
		    </div>

		    <div class="page">
				<div class="cadre">
					<nav>
						<li><a class="navigator" href="#">Présentation</a></li>
						<li><a class="navigator" href="a_la_une/alaune.php">A la Une</a></li>
						<li><a class="navigator" href="page_livre/pagelivre.php">Livres</a></li>
						<li><a class="navigator" href="best_seller/bestseller.php">Les Best-Sellers</a></li>
						<li><a class="navigator" href="derniers_ajouts/derniersajouts.php">Les derniers ajouts</a></li>
						<li><a class="navigator" href="user/utilisateur.php">Mon compte</a></li>
					</nav>
		</div>
	</header>

<div class="rewiew">
<h1>Bienvenue sur Pik a book</h1>
<br/><br/>
<p>Notre bibliothèque en ligne vous permettra d'acheter au format pdf tout types de livres séparé par catégories (Romans, Manga, Comics, Bande-dessinées,Encyclopédie,etc...) et par genres (Action, Aventure, Science-Fiction, etc...).</p>
<p>Vous pourrez aussi découvrir nos coups de coeur via la page "A la une", les livres les plus populaires via la page "Best-sellers" ainsi que les derniers livres ajoutés.</p>
<p>Il vous faudra donc créer un compte afin de pouvoir acheter un ou plusieurs livres et profiter de notre bibliothèque.</p>
<p>Merci pour votre visite et bonne lecture !</p>
<br/>
</div>

<div id="footer_index">
<?php include 'fichier_inc/footer.inc.php'; ?>
</div>
