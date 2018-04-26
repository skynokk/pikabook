<?php
include '../fichier_inc/header.inc.php';
?>

<div class="divPageBestSeller">
  <div class="ligne">
      <div class="divBestSeller"><img class="imageBestSeller" src="../../Images/livre1.jpg" > </div>
      <div class="texteBestSeller"> <h2>ESCLAVE DE DAECH</h2> </div>
  </div>
  <div class="break"></div>

  <div class="ligne">
      <div class="texteBestSeller2"> <h2>Les Revenants</h2> </div>
      <div class="divBestSeller"><img class="imageBestSeller" src="../../Images/livre2.jpg" > </div>
  </div>
  <div class="break"></div>
  <div class="ligne">
      <div class="divBestSeller"><img class="imageBestSeller" src="../../Images/livre3.jpg" > </div>
      <div class="texteBestSeller"> <h2>Les Animaux fantastiques</h2><br><p><?php
              $nom = $pdo->query('SELECT `CliNom` FROM `client`');
              while ($row = $nom->fetch()) {
                var_dump($row);
                echo $row['CliNom'] . "\n";
              }
              ?></></p> </div>
  </div>
</div>

<?php include '../fichier_inc/footer.inc.php'; ?>
