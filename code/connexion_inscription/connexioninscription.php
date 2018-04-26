<?php 
  include '../fichier_inc/header.inc.php';
?>
<br><br>

<!--/////////////////////////////////////////CONNEXION////////////////////////////////////// -->
  <div class="DivCon_Insc">
    <div class="divTitreDiv"><p class="titreDiv">Connexion</p></div>

    <form method="POST" action=<?php echo $_SERVER["PHP_SELF"]; ?>>
      <table class="tableauFormulaire">
        <tr><!-- /////PSEUDO///// -->
          <td><label for="nom" class="label">Pseudo:</label></td>
          <td><input type="text" id="pseudoconn" placeholder="Pseudo" /></td>

          <td><label for="mdp">Mot de passe: </label></td><!-- /////MOT DE PASSE///// -->
          <td><input type="password" id="mdp" name="mdpconn" placeholder="Mot de passe" /></td>

          <td><input class="btnCouleur" type="submit" name="valider" value="Valider"></td>
        </tr>

      </table>
    </form>
    <br>
  </div>
<!--////////////////////////////////////////////////////////////////////////////////////////// -->


<!--/////////////////////////////////////////INSCRIPTION////////////////////////////////////// -->
<div class="DivCon_Insc">
  <form method="POST" action=<?php echo $_SERVER["PHP_SELF"]; ?> id="formInscription">
    <div class="divTitreDiv"> <p class="titreDiv">Pas encore inscrit ? Rejoignez-nous!</p></div>

    <table class="tableauFormulaire">
      <tr>
        <td><label for="nom" class="label">Nom:</label></td><!-- /////NOM///// -->
        <td><input type="text" id="nom" name="nom" placeholder="Nom" value=<?php if (isset($_POST['nom'])) { echo "'".$_POST['nom']."'";
      }?>></td>

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
          <input type="text" name="ville" placeholder="Ville" value=<?php if (isset($_POST['ville'])) { echo "'".$_POST['ville']."'";
      }?>>
          <br>
          <input type="text" name="codePostal" placeholder="Code postal" value=<?php if (isset($_POST['codePostal'])) { echo "'".$_POST['codePostal']."'";
      }?>>
          <br>
          <input type="text" name="rue" placeholder="Nom rue" value=<?php if (isset($_POST['rue'])) { echo "'".$_POST['rue']."'";
      }?>>
          <br>
          <input type="text" name="rueNum" placeholder="Numéro rue" value=<?php if (isset($_POST['rueNum'])) { echo "'".$_POST['rueNum']."'";
      }?>>
          <br>
          <textarea name="cplmAdresse" form="formInscription" placeholder="Complément d'adresse"><?php if (isset($_POST['cplmAdresse'])) { echo "'".$_POST['cplmAdresse']."'";
      }?></textarea>
          <!-- <input type="block" name="complementAdresse" placeholder="Complément d'adresse">-->

        </td>
      </tr>

      <tr><!-- /////PRENOM///// -->
        <td><label for="prenom" class="label">Prénom:</label></td>
        <td> <input type="text" id="prenom" name="prenom" placeholder="Prénom" value=<?php if (isset($_POST['prenom'])) { echo "'".$_POST['prenom']."'";
      }?>></td>
      </tr>

      <tr> <!-- /////DATE DE NAISSANCE///// -->
        <td><label for="dateNaissance" class="label">Date de naissance : </label></td>
        <td><input type="date" id="dateNaissance" name="dateNaissance" value=<?php if (isset($_POST['dateNaissance'])) { echo "'".$_POST['dateNaissance']."'";
      }?>/></td>
      </tr>

      <tr><!-- /////SEXE///// -->
        <td><label for="sexe" class="label">Sexe:</label></td>
        <td><input id="Homme" type="radio" name="sexe" value="H" checked/>Homme
            <input id="Femme" type="radio" name="sexe" value="F"/>Femme
        </td>
      </tr>

      <tr>
        <td><label for="pseudoconn" class="label">Pseudo:</label></td><!-- /////PSEUDO///// -->
        <td><input type="text" id="pseudoinscr" name="pseudoinscr" placeholder="Pseudo" value=<?php if (isset($_POST['pseudoinscr'])) { echo "'".$_POST['pseudoinscr']."'";
      }?>></td>

        <td class="tabEspaceInscri"><label for="email" class="label">Adresse mail:</label></td><!-- /////ADRESSE MAIL///// -->
        <td><input type="email" id="email" name="email" placeholder="Pikabook@gmail.com" value=<?php if (isset($_POST['email'])) { echo "'".$_POST['email']."'";
      }?>></td>
      </tr>

      <tr> <!-- /////MOT DE PASSE///// -->
        <td><label for="mdp" class="label">Mot de passe:</label></td>
        <td><input type="password" id="mdpinscr" name="mdpinscr" placeholder="Mot de passe"/></td>

        <td class="tabEspaceInscri"><label for="confirmdp" class="label">Confirmation mot de passe:</label></td><!-- /////CONFIRMATION MOT DE PASSE///// -->
        <td><input type="password" id="confirmdp" name="confirmdp" placeholder="Confirmer mot de passe" /></td>
      </tr>

    </table>

    <br>
    <p class="btnAlign"><input class="btnCouleur" type="submit" name="inscrire" value="S'inscrire"></p>

  </form>
  <br>
</div>
<!--////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
  if (isset($_POST['inscrire'])){ /*s'active uniquement quand tu appuies sur le bouton s'inscrire*/
    if (isset($_POST['nom']) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["pseudoinscr"]) && isset($_POST["mdpinscr"]) && isset($_POST["confirmdp"]) && $_POST['nom']!== '' && $_POST['prenom']!== '' && $_POST['email']!== '' && $_POST['pseudoinscr']!== '' && $_POST['mdpinscr']!== '' && $_POST['confirmdp']!== '' && $_POST['dateNaissance']!== '' && isset($_POST['ville']) && $_POST['ville']!== '' && isset($_POST['codePostal']) && $_POST['codePostal']!== '' && isset($_POST['rue']) && $_POST['rue']!== '' && isset($_POST['rueNum']) && $_POST['rueNum']!== '') /* on vérifie que tous les critères sont remplis*/{

        if (preg_match("#^[A-Za-z]+#", $_POST['nom']) && preg_match("#^[A-Za-z]+#", $_POST['prenom']) && preg_match("#^[A-Za-z]+#", $_POST['ville']) && preg_match("#^[0-9]+#", $_POST['codePostal']) && preg_match("#^[0-9]#", $_POST['rueNum'])) {/*VERIFICATION DES DONNEES SAISIES*/

          if ($_POST['mdpinscr'] === $_POST['confirmdp'] ) {/* VERIFICATION DES MOTS DE PASSE*/
            echo "<div class='confirmation'><p>Ca marche vous êtes inscrits!</p></div>";
            $nomCli = ucwords($_POST['nom']);
            $prenomCli = ucwords ($_POST['prenom']);
            $villeCli = ucwords ($_POST['ville']);

           $nouveauClient= $pdo -> exec("INSERT INTO client (CliNom, CliPrenom, CliSex, CliMail, CliPseudo, CliMdp, CliBirthDate) VALUES ('".$nomCli."', '".$prenomCli."', '".$_POST['sexe']."', '".$_POST['email']."', '".$_POST['pseudoinscr']."', '".$_POST['mdpinscr']."', '".$_POST['dateNaissance']."')");

           

           $nouveauClientAdr = $pdo -> exec("INSERT INTO adresse(AdrVille, AdrPostal, AdrRue, AdrRueNum, AdrComplement) VALUES ('".$villeCli."', '".$_POST['codePostal']."', '".$_POST['rue']."', '".$_POST['rueNum']."', '".$_POST['cplmAdresse']."')");


/*CHOSE A FAIRE 
- complexifier les vérifications
- imposer des conditions pour le mot de passe
- rajouter l'adresse dans la bdd
- virer les guillemets quand tu refresh le complement d'adresse
*/



          }
          else { /* SI LES MOTS DE PASSE NE SONT PAS IDENTIQUES*/
            echo "<div class='erreur'><p>Les mots de passe ne sont pas similaires</p></div>";
          }
        }

        else {/* SI L'UTILISATEUR N'A PAS RESPECTE LES FORMULAIRES*/
          echo "<div class='erreur'><p>Une erreur est survenue. Veuillez vérifier les données rentrées.</p></div>";
        }
    }
    else {/* SI LES FORMULAIRES NE SONT PAS TOUS REMPLIES (formulaire de copmlément d'adresse n'est pas obligatoire*/
      echo "<div class='erreur'><p>Veuillez remplir tous les formulaires</p></div>";
    }
  }


?>

<?php include '../fichier_inc/footer.inc.php'; ?>
