<?php include '../fichier_inc/header.inc.php'; ?>
<br><br>
<div class="connexion">
  <p class="connect">Connexion</p>
  <br><br>
      <div class="Noms">
      <label for="nom" class="label">Pseudo:</label>
      <input type="text" id="nom" placeholder="Pseudo" />
    </div>
  <div class="Mpd">
    <label for="mdp">Mot de passe: </label>
    <input type="password" id="mdp" name="mdp"/>
  </div>
  <input type="submit" name="valider" value="Valider">
</div>

<div class="Inscription">
  <p class="incript">Pas encore inscrit? Rejoignez-nous!</p>
  <div class="Noms">
  <label for="nom" class="label">Nom:</label>
  <input type="text" id="nom" placeholder="Nom" />
  </div>
  <div class="Noms">
  <label for="nom" class="label">Prénom:</label>
  <input type="text" id="nom" placeholder="Prénom" />
  </div>
  <div class="Adresse">
  <label for="nom" class="label">Adresse mail:</label>
  <input type="text" id="nom" placeholder="pikabook@gmail.com"/>
  </div>
  <div class="Pseudo">
  <label for="nom" class="label">Pseudo:</label>
  <input type="text" id="nom" placeholder="Pseudo"/>
  </div>
  <div class="Mpd">
    <label for="mdp">Mot de passe: </label>
    <input type="password" id="mdp" name="mdp"/>
  </div>
  <div class="Mpd">
    <label for="mdp">Confirmation: </label>
    <input type="password" id="mdp" name="mdp"/>
  </div>
  <input type="submit" name="inscrire" value="S'inscrire">
</div>















<?php include '../fichier_inc/footer.inc.php'; ?>
