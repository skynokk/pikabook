<?php include '../fichier_inc/header.inc.php'; ?>


<!-- Formulaire de tri par genre -->
<div class="divPageLivre">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="tri">
			<?php
				$listTri = $pdo->query("SELECT GenreNom FROM genre"); //recupère les different genre
				$tri = $listTri->fetchAll();
				foreach ($tri as $key) {
					echo "<option value='".utf8_encode($key["GenreNom"])."'>".utf8_encode($key["GenreNom"])."</option>";
				}
			 ?>
		</select>
		<input type="submit" name="submit" value="Trier ! ">
		<?php
			if (isset($_POST["tri"])) {
				echo "Vous avez trié par ".strtolower($_POST["tri"]);
			}
		?>
	</form><br>

	<?php
		if (isset($_POST["tri"])) { //si un genre est choisi
			$clef = utf8_decode($_POST["tri"]); //recupere le genre semectionné
			$idGenreReq = $pdo->query("SELECT GenreID FROM genre WHERE GenreNom ='$clef' "); // recupere l'id correspondant
			$idGenre = $idGenreReq->fetchAll();
			$numGenre = (int)$idGenre[0]["GenreID"]; //affect le type int a  l'id
			$result = $pdo->query("SELECT LivreTitre, LivreCouv, LivreISBN FROM livre WHERE GenreID ='$numGenre' ORDER BY LivreTitre "); //récupère les livres ayant l'id correspondant au genre choisi
			$livre = $result->fetchAll();
			foreach ($livre as $key) {
				echo '<div class="divBooks"><a href="../achat_livre/achatlivre.php?produitID='.$key["LivreISBN"].'"><img class="imageBooks" src="../Images/Couvertures/'.$key["LivreCouv"].'"></a><br>'.utf8_encode($key["LivreTitre"]).'</div>';
			}

		}else{ // si aucun genre n'est choisi (premiere visite sur le page)
			$result = $pdo->query("SELECT LivreTitre, LivreCouv, LivreISBN FROM livre ORDER BY LivreTitre");
			$livre = $result->fetchAll();
			foreach ($livre as $key) {
				echo '<div class="divBooks"><a href="../achat_livre/achatlivre.php?produitID='.$key["LivreISBN"].'"><img class="imageBooks" src="../Images/Couvertures/'.$key["LivreCouv"].'"></a><br>'.utf8_encode($key["LivreTitre"]).'</div>';
			}
		}
	 ?>
</div>





<?php include '../fichier_inc/footer.inc.php'; ?>
