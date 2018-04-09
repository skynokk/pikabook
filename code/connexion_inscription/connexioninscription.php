<?php 
  include '../fichier_inc/connexionBDD.inc.php';
  include '../fichier_inc/header.inc.php';      
?>
<br><br>
<div class="connexion">

  <p class="connect">Connexion</p>
  <br><br>
  <form method="POST" action=<?php echo $_SERVER["PHP_SELF"]; ?>>
    <div class="Noms">
     <label for="nom" class="label">Pseudo:</label>
      <input type="text" id="pseudoconn" placeholder="Pseudo" />
    </div>
    <div class="Mpd">
      <label for="mdp">Mot de passe: </label>
      <input type="password" id="mdp" name="mdpconn"/>
    </div>
     <input type="submit" name="valider" value="Valider">
    </div>
  </form>

<div class="Inscription">
<<<<<<< HEAD
  <form method="POST" action=<?php echo $_SERVER["PHP_SELF"]; ?>>
    <p class="incript">Pas encore inscrit ? Rejoignez-nous!</p>
    <div class="Noms">
      <label for="nom" class="label">Nom:</label>
      <input type="text" id="nom" name="nom" placeholder="Nom" />
    </div>
    <div class="Noms">
      <label for="prenom" class="label">Prénom:</label>
      <input type="text" id="prenom" name="prenom" placeholder="Prénom" />
    </div>
    <div class="Adresse">
      <label for="email" class="label">Adresse mail:</label>
      <input type="text" id="email" name="email" placeholder="pikabook@gmail.com"/>
    </div>
    <div class="Pseudo">
      <label for="pseudoconn" class="label">Pseudo:</label>
      <input type="text" id="pseudoinscr" name="pseudoinscr" placeholder="Pseudo"/>
    </div>
    <div class="Mpd">
      <label for="mdp">Mot de passe: </label>
      <input type="password" id="mdpinscr" name="mdpinscr"/>
    </div>
    <div class="Mpd">
      <label for="confirmdp">Confirmation: </label>
      <input type="password" id="confirmdp" name="confirmdp"/>
    </div>
    <input type="submit" name="inscrire" value="S'inscrire">
  </form>
=======
  <p class="incript">Pas encore inscrit? Rejoignez-nous!</p>
  <div class="Noms">
  <label for="nom" class="label">Nom:</label>
  <input type="text" id="nom" placeholder="Nom" />
  </div>
  <div class="Noms">
  <label for="nom" class="label">Prénom:</label>
  <input type="text" id="nom" placeholder="Prénom" />
  </div>
  <p>Sexe:</p>
			<input id="oui" type="radio" name="question1" value="Oui" checked/>
			<label for="oui">Oui</label>
			<input id="non" type="radio" name="question1" value="non"/>
			<label for="non">Non</label
  <div class="Adresse">
  <label for="nom" class="label">Adresse mail:</label>
  <input type="text" id="nom" placeholder="pikabook@gmail.com"/>
  </div>
  <div class="Pseudo">
  <label for="nom" class="label">Pseudo:</label>
  <input type="text" id="nom" placeholder="Pseudo"/>
  </div>
  <div class="Mpd">
    <label for="mdp">Mot de passe: </label>
    <input type="password" id="mdp" name="mdp"/>
  </div>
  <div class="Mpd">
    <label for="mdp">Confirmation: </label>
    <input type="password" id="mdp" name="mdp"/>
  </div>
  <input type="submit" name="inscrire" value="S'inscrire">
>>>>>>> bed42a68ba9c859d85c5fee92ae40a6a30e253ad
</div>

<?php
  if (isset($_POST['inscrire'])){ /*s'active uniquement quand tu appuies su r le bouton s'inscrire*/ 
    if (isset($_POST['nom']) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["pseudoinscr"]) && isset($_POST["mdpinscr"]) && isset($_POST["confirmdp"])  ) /* on vérifie que tous les critères sont remplis*/{
      echo "<h1><font color='red'>Entre commande</font></h1>";
    }
    else {
      echo "<h1><font color='white'>Ca a pas marché</font></h1>";
    }
  }
  

?>













<?php include '../fichier_inc/footer.inc.php'; ?>
