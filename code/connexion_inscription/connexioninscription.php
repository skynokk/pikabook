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
    <div>
    <p>Sexe:</p>
      <input id="oui" type="radio" name="sexe" value="Oui" checked/>
      <label for="oui">Oui</label>
      <input id="non" type="radio" name="sexe" value="non"/>
      <label for="non">Non</label>
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
</div>

<?php
  if (isset($_POST['inscrire'])){ /*s'active uniquement quand tu appuies su r le bouton s'inscrire*/ 
    if (isset($_POST['nom']) && isset($_POST["sexe"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["pseudoinscr"]) && isset($_POST["mdpinscr"]) && isset($_POST["confirmdp"]) && $_POST['nom']!== '' && $_POST['prenom']!== '' && $_POST['email']!== '' && $_POST['pseudoinscr']!== '' && $_POST['mdpinscr']!== '' && $_POST['confirmdp']!== '') /* on vérifie que tous les critères sont remplis*/{
      var_dump($_POST['nom']);
      echo "<h1><font color='red'>E".$_POST['nom']."</font></h1>";
    }
    else {
      echo "<p class='erreur'>Veuillez remplir tous les formulaires</p>";
    }
  }
  

?>













<?php include '../fichier_inc/footer.inc.php'; ?>
