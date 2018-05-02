<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <section class="artiste">
      <form id="formArtiste" method="post">
        <label for="artisteNom">Nom de l'artiste ou du groupe</label> <input id="artisteNom" type="text" name="artisteNom" placeholder="Nom de l'artiste ou du groupe"><br>
        <label for="artisteBio">Description De l'artiste ou du groupe</label> <textarea name="artisteBio" form="formArtiste" rows="8" cols="80"></textarea> <br>
        <input type="submit" name="addArtiste" value="Ajouter !"><br><br>
      </form>
    </section><!-- Fin Artiste-->

    <section class="Genre">
      <form id="formGenre" method="post">
        <label for="genreNom">Nom du genre</label><input type="text" name="genreNom" placeholder="Votre genre"><br>
        <input type="submit" name="addGenre" value="Ajouter ! "><br><br>
      </form>
    </section><!-- Fin Genre-->

    <section class="Album">
      <form id="formAlbum" action="index.html" method="post">

      </form>
    </section><!-- Fin Album-->

    <section class="Musique">

    </section><!-- Fin Musique -->
  </body>
</html>
