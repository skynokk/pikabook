<?php include '../fichier_inc/header.inc.php'; ?>

<?php
$result = $pdo->query("SELECT LivreTitre, LivreCouv, LivreID, LivreDesc, LivreISBN FROM livre ORDER BY LivreID DESC LIMIT 5 ");
$livre = $result->fetchAll();
foreach ($livre as $key) {
  echo '
  <div class="divDerniersAjouts">
    <div class="infoLivre">
      <div class="resumAjout">
        <h3>'.utf8_encode($key["LivreTitre"]).'</h3>
        <p class="resum">Synospis :  <br/>
          '.utf8_encode($key["LivreDesc"]).'
        </p>
      </div>
      <div class="img">
      <a href="../achat_livre/achatlivre.php?produitID='.$key["LivreISBN"].'"><img src="../Images/Couvertures/'.$key["LivreCouv"].'" alt="Couverture" class="holderAjout"></a>
      </div>
    </div>
  </div>

  ';}
?>


<?php include '../fichier_inc/footer.inc.php'; ?>
