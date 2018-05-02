<?php include '../fichier_inc/header.inc.php'; ?>

<div class="menuLivres">
			<a href="#">Aventure</a>
			<a href="#">Romance</a>
			<a href="#">Science</a>
			<a href="#">Nouveaut&eacute;e</a>
			<a href="#">Selection du mois</a>
</div>
<div class="divPageLivre">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
		<select name="tri">
			<?php
				$listTri = $pdo->query("SELECT GenreNom FROM genre");
				$tri = $listTri->fetchAll();
				foreach ($tri as $key) {
					echo "<option value='".utf8_encode($key["GenreNom"])."'>".utf8_encode($key["GenreNom"])."</option>";
				}
			 ?>
		</select>
		<input type="submit" name="submit" value="Trier ! ">
	</form>

	<?php
		if (isset($_GET["tri"])) {
			$clef = utf8_decode($_GET["tri"]);
			$idGenreReq = $pdo->query("SELECT GenreID FROM genre WHERE GenreNom ='$clef' ");
			$idGenre = $idGenreReq->fetchAll();
			echo($idGenre[0]["GenreID"]);
		}

		$result = $pdo->query("SELECT LivreTitre, LivreCouv FROM livre");
		$livre = $result->fetchAll();
		foreach ($livre as $key) {
			echo '<div class="divBooks"><a href="../achat_livre/achatlivre.php"><img class="imageBooks" src="../Images/Couvertures/'.$key["LivreCouv"].'"></a><br>'.utf8_encode($key["LivreTitre"]).'</div>';
		}
	 ?>
</div>





<?php include '../fichier_inc/footer.inc.php'; ?>
