<?php include("fichier_inc/connexionBDD.inc.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <title>Pika Book</title>
	    <link rel="stylesheet" href="pikabook.css">
	</head>

	<body onload="disclaimer()">
	<header>
		<?php
		if (!isset($_SESSION['Login'])) {

			echo "<input type=\"button\" class=\"co\" value=\"Inscription\" onclick=\"window.location.href='connexion_inscription/connexioninscription.php';\" />
				<form method=\"POST\" action='".$_SERVER['PHP_SELF']."' id=\"form\">
				<input type=\"text\" id=\"pseudo\" placeholder=\"Pseudo\" name=\"pseudoRapide\" value=\"";
				if (isset($_POST['coRapide'])) {
				 	echo $_POST['pseudoRapide'];
				 }
				echo "\" />
				<input type=\"password\" id=\"mdp\" name=\"mdpRapide\" placeholder=\"Mot de Passe\"/>
			 	<input class=\"boutonco\" type=\"submit\" name=\"coRapide\" value=\"connexion\">
				</form>
				<br/><br/>";

		if (isset($_POST['coRapide'])) {
      	if (isset($_POST['pseudoRapide']) && isset($_POST['mdpRapide']) && $_POST['pseudoRapide']!== '' && $_POST['mdpRapide']!== '') {/*VERIFICATION DES FORMULAIRES*/

        $rechercheLogMdpRapide = $pdo -> query('SELECT CliPseudo, CliMdp FROM client ');
        while ($donnees = $rechercheLogMdpRapide -> fetch()) {/*On parcours la base de donnée pour trouver le pseudo correspondant*/
          if ($_POST['pseudoRapide'] == $donnees['CliPseudo']) {
            $cryptMdpConnRapide= $_POST['mdpRapide'];
            $cryptSalt = 'Jetestlesaltdesfonctionscrypt';
            $mdpCryptéConnRap= crypt($cryptMdpConnRapide, $cryptSalt);
            if ($mdpCryptéConnRap == $donnees['CliMdp']) {/*Quand le pseudo est trouvé on regarde si le mot de passe est similaire*/
              $_SESSION['Login']= $_POST['pseudoRapide'];/*La session est active*/
              header("refresh:0");/*la page est rafraichie*/
              break;
            }
            else {  echo "<p class='erreurRap'>Mauvais mot de passe pour ".$_POST['pseudoRapide']."</p>";}/*SI LE MOT DE PASSE EST MAUVAIS*/
          }
        }
      }
      else {
        echo "<p class='erreurRap'>Veuillez remplir tous les formulaires.</p>";/*SI LES FORMULAIRES NE SONT PAS REMPLIS*/
      }
    }
}
	else {//si la session est active alors les commandes de l'utilisateur sont accessibles
		echo "<p class='floatRight'>Bonjour à toi ". $_SESSION['Login'] . " !</p>";
		echo '<div class="clear"></div>';
		echo "<form action='".$_SERVER['PHP_SELF']."' method=\"POST\">
		<input type=\"submit\" name=\"Deconnexion\" value=\"Déconnexion\" class='btnDeco'>";
		if (isset($_POST['Deconnexion'])) {
			session_destroy();
			header ('Refresh: 0');
		}
	}
?>

			<h1><a href="index"><img class="logo" src="Images/logo4_1.png" alt="logo"/></a></h1>

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
						<?php if (isset($_SESSION['Login'])) {
							$statutAdminResult= $pdo->query('SELECT CliStatut FROM client WHERE Clipseudo="'.$_SESSION['Login'].'"');
   							$statutAdmin = $statutAdminResult -> fetch(PDO::FETCH_ASSOC);
							if ($statutAdmin['CliStatut'] == '1') {
								echo "<li class='admin'><a class=\"navigator admin\" href=\"ajoutPikabook.php\">Ajout de livre</a></li>";
							}
						} ?>
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
<script type="text/javascript" src="jsindex.js"></script>
<div id="footerIndex">
<?php
echo "<footer><br/><br/><br/><br/>Copyright © 2018 <strong>Pikabook</strong>, Tous droits réservés, <a href='mention_legale_cookies_contact/mentions_legales.php' class='noDecoration'>Mentions Légales</a> & <a href='mention_legale_cookies_contact/cookies.php' class='noDecoration'> Cookies </a>, <a href='mention_legale_cookies_contact/contact.php' class='noDecoration'>Contact</a> </footer></body>
</html>";
?>
</div>
