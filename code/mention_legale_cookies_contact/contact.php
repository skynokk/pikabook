<?php 
  include '../fichier_inc/header.inc.php';
?>

<div class="contact">
  <form method="POST" action=<?php echo $_SERVER["PHP_SELF"]; ?> id="contactForm">
    <div class="divTitreDiv"> <p class="titreDiv">Contactez-nous !</p></div>
    	<div class="divContact">
	  		<!-- /////NOM///// -->
	    	<p>Nom*:</p>
	    	<input type="text" id="nom" name="nom" placeholder="Nom" value=<?php if (isset($_POST['nom'])) { echo "'".$_POST['nom']."'";
	      }?>>       
	      <br/>

	      <!-- /////PRENOM///// -->
	    	<p>Prénom*:</p>
	    	<input type="text" id="prenom" name="prenom" placeholder="Prénom" value=<?php if (isset($_POST["prenom"])) { echo "'".addslashes($_POST["prenom"])."'";
	      }?>>
	      <br/>

	      <!-- /////Objet///// -->
	   		<p>Objet*:</p>
	   		<input type="text" id="objet" name="objet" placeholder="Objet du mail" value=<?php if (isset($_POST["objet"])) { echo "'".addslashes($_POST["objet"])."'";
	      }?>>
	     	<br/>

	      <!-- /////CONTENU DU MESSAGE///// -->
	   		<p>Votre message*:</p>
	   		<textarea class='contenuMessage' name="contenuMessage" form="contactForm" placeholder="Tapez votre message"></textarea> 
   		</div>       
    <br>
    <p class="btnAlign"><input class="btnCouleur" type="submit" name="envoyer" value="Envoyer"></p>
    <p class="note"> *Champs obligatoires </p>

  </form>
  <br>
</div>

<?php

	if (isset($_POST['envoyer'])) {
		if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['objet']) && isset($_POST['contenuMessage']) && $_POST['nom']!== '' && $_POST['prenom']!== '' && $_POST['objet']!== '' && $_POST['contenuMessage']!== '' ) {
			$message = wordwrap($_POST['contenuMessage'], 70, "\r\n");
			$mailContact= 'laura.graca@ynov.com';
			$objetContact= $_POST['nom'].' '. $_POST['prenom'].' : '. $_POST['objet'];
			mail("laura.graca@ynov.com", $objetContact, $message);
			echo "<p class='confirmation'>Le mail a été envoyé !</p>";
		}
		else {echo "<p class='erreur'>Veuillez remplir tous les formulaires</p>";
		}
	}
/*/////////////////LA FONCTION MAIL NE MARCHE PAS EN LOCAL MAIS MARCHE EN LIGNE//////////////*/
?>


<?php include '../fichier_inc/footer.inc.php'; ?>
