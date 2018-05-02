<?php include '../fichier_inc/header.inc.php'; ?>

<?php

  if (isset($_GET["produitID"])) {
    $produitID = $_GET["produitID"];
    $result = $pdo->query("SELECT * FROM livre WHERE LivreISBN='$produitID'");
    $infoLivre = $result->fetch(PDO::FETCH_ASSOC);

    // Affichage du genre
    $genre= $infoLivre["GenreID"];
    $resultGenre = $pdo->query("SELECT GenreNom FROM genre WHERE GenreID='$genre'");
    $genreNom = $resultGenre->fetch(PDO::FETCH_ASSOC);
    //

    // Affichage de l'auteur
    $auteur= $infoLivre["AuteurID"];
    $resultAuteur = $pdo->query("SELECT AuteurNom FROM auteur WHERE AuteurID='$auteur'");
    $auteurNom = $resultAuteur->fetch(PDO::FETCH_ASSOC);
    //

    // Affichage de l'editeur
    $editeur= $infoLivre["EditID"];
    $resultEdit = $pdo->query("SELECT EditNom FROM editeur WHERE EditID='$editeur'");
    $editeurNom = $resultEdit->fetch(PDO::FETCH_ASSOC);
    //


    echo '
    <div id="divpageentiere">
      <div id="divAchatLivre1">
        <p id="pAchatLivre">
          <h3>Description du Produit :</h3>
          Auteur : '.utf8_encode($auteurNom["AuteurNom"]).' <br/>
          Editeur : '.utf8_encode($editeurNom["EditNom"]).' <br/>
          Genre : '.utf8_encode($genreNom["GenreNom"]).' <br/>
          <h3>Synopsis : </h3><br/>
          '.utf8_encode($infoLivre["LivreDesc"]).'<br>
        </p>
      </div>

      <div id="divAchatLivre2">
        <img id="imgAchatLivre1" src="../Images/Couvertures/'.$infoLivre["LivreCouv"].'" alt="Couverture du livre">
        <div id="prixal">'.$infoLivre["LivrePrix"].'€</div>
        <a id="tele" href="../livreFiles/'.$infoLivre["LivreFile"].'" download>Telecharger le fichier</a>
        </div>
        <br/>
      </div>';
  }
 ?>




<div id="footeral">
  <?php include '../fichier_inc/footer.inc.php'; ?>
</div>
