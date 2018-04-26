<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <title>Pika Book</title>
	    <link rel="stylesheet" href="pikabook.css">
			<script type="text/javascript" src="jsindex.js"></script>
	</head>

	<body onload="disclaimer()">
	<header>
		<div>
			<input type="button" class="co" value="Inscription" onclick="window.location.href='connexion_inscription/connexioninscription';" />
				<form method="POST" action="" id="form">
						<input type="text" id="pseudo" placeholder="Pseudo" />
						<input type="password" id="mdp" name="mdp" placeholder="Mot de Passe"/>
					 <input class="boutonco" type="submit" name="valider" value="connexion">
				</form>
			<br/><br/>

			<a href="../"> <img src="../Images/petit-panier.png" class="panier" alt="panier"></a>
			<a href="vos_commandes/voscommandes"><button type="button" class="commande" name="button">Mes commandes</button></a>


			<h1><img class="logo" src="../Images/logo4_1.png" alt=""/></h1>

		     <div id="searchBar">
		        <input class="champ" type="text" placeholder="Search..."/>
		        <input class="bouton" type="button" value="&#128269; " />
		    </div>

		    <div class="page">
				<div class="cadre">
					<nav>
						<li><a class="navigator" href="#">Présentation</a></li>
						<li><a class="navigator" href="a_la_une/alaune">A la Une</a></li>
						<li><a class="navigator" href="page_livre/pagelivre">Livres</a></li>
						<li><a class="navigator" href="best_seller/bestseller">Les Best-Sellers</a></li>
						<li><a class="navigator" href="derniers_ajouts/derniersajouts">Les derniers ajouts</a></li>
						<li><a class="navigator" href="user/utilisateur">Mon compte</a></li>
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

<div id="footerIndex">
<?php include 'fichier_inc/footer.inc.php'; ?>
</div>
