<?php include("connexionBDD.inc.php") ?>

<?php
echo "<!DOCTYPE html>
<html>
	<head>
		<meta charset=\"utf-8\">
	    <title>Pika Book</title>
	    <link rel=\"stylesheet\" href=\"../pikabook.css\">
	</head>

	<body>
	<header>";
	if (!isset($_SESSION['Login'])) {/*Si la session n'est pas active alors les boutons pour se connecter ou s'incrire apparaissent*/

			echo "<input type=\"button\" class=\"co\" value=\"Inscription\" onclick=\"window.location.href='../connexion_inscription/connexioninscription.php';\" />
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
		echo "<form action='".$_SERVER['PHP_SELF']."' method=\"POST\">
		<input type=\"submit\" name=\"Deconnexion\" value=\"Déconnexion\" class='btnDeco'>";
		if (isset($_POST['Deconnexion'])) {
			session_destroy();
			header ('Refresh: 0');
		}
			echo "<br/><br/>
	<a href=\"../panier/panier\"> <img src=\"../Images/petit-panier.png\" class=\"panier\" alt=\"panier\"></a>
	<a href=\"../vos_commandes/voscommandes\"><button type=\"button\" class=\"commande\" name=\"button\">Mes commandes</button></a>
	<br/><br/>";
	}



		echo "<h1><a href=\"../index\"><img class=\"logo\" src=\"../Images/logo4_1.png\" alt=\"\"/></a></h1>

		     <div id=\"searchbar\">
		        <input class=\"champ\" type=\"text\" placeholder=\"Search...\"/>
		        <input class=\"bouton\" type=\"button\" value=\"&#128269; \" />
		    </div>

		    <div class=\"page\">
				<div class=\"cadre\">
					<nav>
						<li><a class=\"navigator\" href=\"../index\">Présentation</a></li>
						<li><a class=\"navigator\" href=\"../a_la_une/alaune\">A la Une</a></li>
						<li><a class=\"navigator\" href=\"../page_livre/pagelivre\">Livres</a></li>
						<li><a class=\"navigator\" href=\"../best_seller/bestseller\">Les Best-Sellers</a></li>
						<li><a class=\"navigator\" href=\"../derniers_ajouts/derniersajouts\">Les derniers ajouts</a></li>
						<li><a class=\"navigator\" href=\"../user/utilisateur\">Mon compte</a></li>
					</nav>
		</div>
	</header>";
?>
