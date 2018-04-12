<?php 
  include '../fichier_inc/connexionBDD.inc.php';
  include '../fichier_inc/header.inc.php';      
?>
<br><br>

<!--/////////////////////////////////////////CONNEXION////////////////////////////////////// -->
  <div class="connexion">
    <p class="titreDiv">Connexion</p>
    <br><br>

    <form method="POST" action=<?php echo $_SERVER["PHP_SELF"]; ?>> 
      <table class="tableauFormulaire">
        <tr><!-- /////PSEUDO///// -->
          <td><label for="nom" class="label">Pseudo:</label></td>
          <td><input type="text" id="pseudoconn" placeholder="Pseudo" /></td>
        </tr>

        <tr><!-- /////MOT DE PASSE///// -->
          <td><label for="mdp">Mot de passe: </label></td>
          <td><input type="password" id="mdp" name="mdpconn" placeholder="Mot de passe" /></td>
        </tr>
            
        <tr>
          <td><input type="submit" name="valider" value="Valider"></td>
        </tr>  
    
      </table>
    </form>
  </div>
<!--////////////////////////////////////////////////////////////////////////////////////////// -->


<!--/////////////////////////////////////////INSCRIPTION////////////////////////////////////// -->
<div class="connexion">
  <form method="POST" action=<?php echo $_SERVER["PHP_SELF"]; ?>>
    <p class="titreDiv">Pas encore inscrit ? Rejoignez-nous!</p>

    <table class="tableauFormulaire">
      <tr>
        <td><label for="nom" class="label">Nom:</label></td><!-- /////NOM///// -->
        <td><input type="text" id="nom" name="nom" placeholder="Nom"/></td>

        <td rowspan="4" class="tabEspaceInscri"><!-- /////ADRESSE///// -->
          <label for="ville" class="label">Ville :</label>
          <br>
          <label for="codePostal" class="label">Code postal :</label>
          <br>
          <label for="rue" class="label">Nom de la rue :</label>
          <br>
          <label for="rueNum" class="label">Numéro de la rue :</label>
          <br>
          <label for="complementAdresse" class="label">Complément d'adresse:</label>
        </td>
        <td rowspan="4">
          <input type="text" name="ville" placeholder="Ville">
          <br>
          <input type="text" name="codePostal" placeholder="Code postal">
          <br>
          <input type="text" name="rue" placeholder="Nom rue">
          <br>
          <input type="text" name="rueNum" placeholder="Numéro rue">
          <br>
          <input type="text" name="complementAdresse" placeholder="Complément d'adresse">

        </td>
      </tr>
      
      <tr><!-- /////PRENOM///// -->
        <td><label for="prenom" class="label">Prénom:</label></td>
        <td> <input type="text" id="prenom" name="prenom" placeholder="Prénom" /></td>
      </tr>

      <tr> <!-- /////DATE DE NAISSANCE///// -->
        <td><label for="dateNaissance" class="label">Date de naissance : </label></td>
        <td><input type="date" id="dateNaissance" name="dateNaissance"/></td>
      </tr>

      <tr><!-- /////SEXE///// -->
        <td><label for="sexe" class="label">Sexe:</label></td>
        <td><input id="Homme" type="radio" name="sexe" value="H" checked/>Homme
            <input id="Femme" type="radio" name="sexe" value="F"/>Femme
        </td>
      </tr>

      <tr>
        <td><label for="pseudoconn" class="label">Pseudo:</label></td><!-- /////PSEUDO///// -->
        <td><input type="text" id="pseudoinscr" name="pseudoinscr" placeholder="Pseudo"/></td>

        <td class="tabEspaceInscri"><label for="email" class="label">Adresse mail:</label></td><!-- /////ADRESSE MAIL///// -->
        <td><input type="text" id="email" name="email" placeholder="Pikabook@gmail.com"/></td>
      </tr>

      <tr> <!-- /////MOT DE PASSE///// -->
        <td><label for="mdp" class="label">Mot de passe:</label></td>
        <td><input type="password" id="mdpinscr" name="mdpinscr" placeholder="Mot de passe" /></td>

        <td class="tabEspaceInscri"><label for="confirmdp" class="label">Confirmation:</label></td><!-- /////CONFIRMATION MOT DE PASSE///// -->
        <td><input type="password" id="confirmdp" name="confirmdp" placeholder="Confirer mot de passe" /></td>
      </tr>
      
      <tr>
        <td><input type="submit" name="inscrire" value="S'inscrire"></td>
      </tr>
      
    </table>
    
  </form>
</div>
<!--////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
  if (isset($_POST['inscrire'])){ /*s'active uniquement quand tu appuies sur le bouton s'inscrire*/ 
    if (isset($_POST['nom']) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["pseudoinscr"]) && isset($_POST["mdpinscr"]) && isset($_POST["confirmdp"]) && $_POST['nom']!== '' && $_POST['prenom']!== '' && $_POST['email']!== '' && $_POST['pseudoinscr']!== '' && $_POST['mdpinscr']!== '' && $_POST['confirmdp']!== '' && $_POST['dateNaissance']!== '') /* on vérifie que tous les critères sont remplis*/{
        if ($_POST['mdpinscr'] === $_POST['confirmdp'] ) {
          echo "TEST";
          var_dump($_POST);
        }
       
    }
    else {
      echo "<p class='erreur'>Veuillez remplir tous les formulaires</p>";
    }
  }
  

?>













<?php include '../fichier_inc/footer.inc.php'; ?>
