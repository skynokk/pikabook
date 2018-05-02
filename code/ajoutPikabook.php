
<?php
  include("fichier_inc/connexionBDD.inc.php");
  include("fichier_inc/header.inc.php");
 ?>

<!-- Aide -->
<!-- La fonction addslashes($string) permet d'echapper tout  caractère qui le requiert, ici il s'agit le plus souvent d'echapper les ' ou " des input qui font echouer les requêtes SQL -->
<!-- Les fonctions utf8_decode/encode permettent de manipuler les cractères speciaux aisement dans la base de données -->


<!-- Formulaire d'ajout d'un auteur -->
<section id="auteur">
  <fieldset>
    <legend>Ajouter un auteur</legend>
    <form id="formAuteur" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <label for="auteurNom">Nom de l'auteur :</label><br> <input id="auteurNom" type="text" name="auteurNom"><br><br>
      <label for="auteurBio">Brève description de l'auteur : </label> <br> <textarea id="auteurBio" name="auteurBio" rows="8" cols="80"></textarea><br><br>
      <input type="submit" value="Ajouter !">
    </form>
    <?php
      if (isset($_POST["auteurNom"]) AND isset($_POST['auteurBio'])){
        if ($_POST["auteurNom"]!="" AND $_POST["auteurBio"]!="") {
          $auteurNom = addslashes(utf8_decode($_POST["auteurNom"]));
          $auteurBio = addslashes(utf8_decode($_POST["auteurBio"]));
          $result = $pdo->exec("INSERT INTO auteur (AuteurNom, AuteurBio) VALUES ('$auteurNom', '$auteurBio')");
          echo "Auteur ajouté !!";
        }
        else {
          echo "<p>Veuillez saisir un nom d'auteur et une description !</p>";
        }
      }
     ?>
  </fieldset>
</section>
<!-- Fin du formulaire auteur -->


<!-- Formulaire d'ajout d'un éditeur -->
<section id="editeur">
  <fieldset>
    <legend>Ajouter un éditeur</legend>
    <form id="formEditeur" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <label for="editeurNom">Nom de l'éditeur : </label><br><input id="editeurNom" type="text" name="editeurNom"><br><br>
      <input type="submit" value="Ajouter !">
    </form>
    <?php
      if (isset($_POST["editeurNom"])){
        if ($_POST["editeurNom"]!="") {
          $editeurNom = addslashes(utf8_decode($_POST["editeurNom"]));
          $result = $pdo->exec("INSERT INTO editeur (EditNom) VALUES ('$editeurNom')");
          echo "Editeur ajouté !!";
        }
        else {
          echo "<p>Veuillez saisir un nom d'éditeur</p> ";
        }
      }
     ?>
  </fieldset>
</section>
<!-- Fin du formulaire éditeur -->


<!-- Formulaire d'ajout d'un genre -->
<section id="genre">
  <fieldset>
    <legend>Ajouter un genre</legend>
    <form id="formGenre" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <label for="genreNom">Nom du genre : </label><br><input id="genreNom" type="text" name="genreNom"><br><br>
      <label for="genreDesc">Description du genre : </label><br><textarea id="genreDesc" name="genreDesc" rows="8" cols="80"></textarea><br><br>
      <input type="submit"  value="Ajouter !">
    </form>
    <?php
      if (isset($_POST["genreNom"]) AND isset($_POST["genreDesc"])) {
        if ($_POST["genreNom"] !="" AND $_POST["genreDesc"] !="") {
          $genreNom = addslashes(utf8_decode($_POST["genreNom"]));
          $genreDesc = addslashes(utf8_decode($_POST["genreDesc"]));
          $result = $pdo->exec("INSERT INTO genre (GenreNom, GenreDesc) VALUES ('$genreNom', '$genreDesc')");
          echo "Genre ajouté !!";
        }
        else {
          echo "<p>Veuillez saisir un nom et une description !!</p>";
        }
      }
     ?>

  </fieldset>
</section>
<!-- Fin du formulaire genre -->


<!-- Formulaire d'ajout d'un livre -->
<section id="livre">
  <fieldset>
    <legend>Ajouter un livre</legend>
    <form id="formLivre" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      <label for="livreISBN">Code ISBN : </label><br> <input id="livreISBN" type="text" name="livreISBN"><br><br>
      <label for="livreTitre">Titre du livre : </label><br> <input id="livreTitre" type="text" name="livreTitre"><br><br>
      <label for="livreAnnee">Année de parution (aaaa): </label><br> <input id="livreAnnee" type="text" name="livreAnnee"><br><br>
      <label for="livrePrix">Prix du livre (ex : 7.55) : </label><br> <input id="livrePrix" type="text" name="livrePrix"><br><br>
      <label for="livreDesc">Synopsis : </label><br>  <textarea id="livreDesc" name=livreDesc rows="8" cols="80"></textarea> <br><br>
      <label for="livreCouv">Première de couverture : </label><br> <input id="livreCouv" type="file" name="livreCouv"><br><br>
      <label for="livreFile">Fichier du livre : </label><br><input id="livreFile" type="file" name="livreFile"><br><br>
      <label for="editNom">Nom de l'éditeur : </label>
        <select id="editNom" name="livreEditNom">
          <?php // Ce script permet d'afficher tous les editeurs de la base de données, l'utilisateur ne peut donc que choisir un editeur présent dans la bdd
            $editList = $pdo->query("SELECT EditNom from editeur ORDER BY EditNom");
            $editArray = $editList->fetchAll();
            foreach ($editArray as $key => $value) {
              echo "<option value='".utf8_encode($value['EditNom'])."'>".utf8_encode($value['EditNom'])."</option>";
            }
           ?>
        </select><br>

      <label for="auteurNom">Nom de l'auteur : </label>
        <select id="auteurNom" name="livreAuteurNom">
          <?php // Idem pour les auteurs
            $auteurList = $pdo->query("SELECT AuteurNom from auteur ORDER BY AuteurNom");
            $auteurArray = $auteurList->fetchAll();
            foreach ($auteurArray as $key => $value) {
              echo "<option value='".utf8_encode($value['AuteurNom'])."'>".utf8_encode($value['AuteurNom'])."</option>";
            }
           ?>
        </select><br>

      <label for="genreNom">Genre : </label>
        <select id="genreNom" name="livreGenreNom">
          <?php // Idem pour les genres
            $genreList = $pdo->query("SELECT GenreNom from genre ORDER BY GenreNom");
            $genreArray = $genreList->fetchAll();
            foreach ($genreArray as $key => $value) {
              echo "<option value='".utf8_encode($value['GenreNom'])."'>".utf8_encode($value['GenreNom'])."</option>";
            }
           ?>
        </select><br>

      <br><input type="submit" name="submit" value="Ajouter !">
    </form>
    <?php
  if (isset($_POST["livreISBN"]) AND isset($_POST["livreTitre"]) AND isset($_POST["livreAnnee"]) AND isset($_POST["livrePrix"]) AND isset($_POST["livreDesc"]) AND isset($_FILES["livreCouv"]) AND isset($_FILES["livreFile"])) { //Verification permettant de ne pas afficher d'erreur lors de la premiere visite de la page
      if ($_POST["livreISBN"] !="" AND $_POST["livreTitre"] !="" AND $_POST["livreAnnee"] !="" AND $_POST["livrePrix"] !="" AND $_POST["livreDesc"] !="" AND $_FILES["livreCouv"] !="" AND $_FILES["livreFile"] !="") { //Permet de verifier que tout les champs sont remplis
        if(preg_match("/^\d{1,4}$/", $_POST['livreAnnee']) AND preg_match("/^\d{1,}[.]{0,}\d{0,}$/", $_POST['livrePrix'])){ // Expression reguliere permetant de tester si l'année est bien un int à 4 chiffre et si le prix est bien de la forme 1(.000)
          $livreISBN = addslashes(utf8_decode($_POST["livreISBN"]));
          $livreTitre = addslashes(utf8_decode($_POST["livreTitre"]));
          $livreAnnee = addslashes(utf8_decode($_POST["livreAnnee"]));
          $livrePrix = addslashes(utf8_decode($_POST["livrePrix"]));
          $livreDesc = addslashes(utf8_decode($_POST["livreDesc"]));
          $livreCouv = addslashes(utf8_decode($_FILES["livreCouv"]["name"]));
          $livreFile = addslashes(utf8_decode($_FILES["livreFile"]["name"]));

          $livreEditNom = addslashes(utf8_decode($_POST["livreEditNom"]));
          $livreEditNom = $pdo->query("SELECT EditID FROM editeur WHERE EditNom = '$livreEditNom'"); //selectione l'id correspondant a l'éditeur choisit
          $livreEditNom = $livreEditNom->fetch(PDO::FETCH_ASSOC);
          $livreEditNom["EditID"] = (int)$livreEditNom["EditID"];


          $livreAuteurNom = addslashes(utf8_decode($_POST["livreAuteurNom"]));
          $livreAuteurNom = $pdo->query("SELECT AuteurID FROM auteur WHERE AuteurNom = '$livreAuteurNom'"); // Idem pour l'auteur
          $livreAuteurNom = $livreAuteurNom->fetch(PDO::FETCH_ASSOC);
          $livreAuteurNom["AuteurID"] = (int)$livreAuteurNom["AuteurID"];


          $livreGenreNom = addslashes(utf8_decode($_POST["livreGenreNom"]));
          $livreGenreNom = $pdo->query("SELECT GenreID FROM genre WHERE GenreNom = '$livreGenreNom'"); // Idem pour le genre
          $livreGenreNom = $livreGenreNom->fetch(PDO::FETCH_ASSOC);
          $livreGenreNom["GenreID"] = (int)$livreGenreNom["GenreID"];


          // Cette section permet d'uploader la premiere de couverture et le fichier du livre
          $targetDirCouv = "Images/Couvertures/"; //chemin du dossier qui contient les premiere de couvertures
          $targetDirLivre = "livreFiles/"; //chemin du doissier qui contient les fichier de livres

          $targetFileCouv = $targetDirCouv . basename($_FILES["livreCouv"]["name"]);
          $targetFileLivre = $targetDirLivre . basename($_FILES["livreFile"]["name"]);

          move_uploaded_file($_FILES["livreCouv"]["tmp_name"],$targetFileCouv);
          move_uploaded_file($_FILES["livreFile"]["tmp_name"],$targetFileLivre);
          // Fin section upload


          $result = $pdo->query("INSERT INTO livre (LivreISBN, LivreTitre, LivreAnnee, LivrePrix, LivreDesc, LivreCouv, LivreFile, EditID, AuteurID, GenreID)
          VALUES ('$livreISBN','$livreTitre','$livreAnnee','$livrePrix','$livreDesc', '$livreCouv', '$livreFile', $livreEditNom[EditID], $livreAuteurNom[AuteurID], $livreGenreNom[GenreID])"); //ajout des données

          echo "<p>Vous avez ajouté un livre</p>";
        }
        else {
          echo "<p>Une erreur est survenue, verifiez que les champs prix et année soient correctement rentrés</p>"; //Si les expressions regulieres ne sont pas respectées
        }
      }
      else {
        echo "<p>Veuillez remplir tous les champs</p>";
      }
    }
     ?>
  </fieldset>
</section>
<!-- Fin du formulaire livre -->


<?php include("fichier_inc/footer.inc.php"); ?>
