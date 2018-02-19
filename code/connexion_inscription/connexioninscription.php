<?php include '../fichier_inc/header.inc.php'; ?>
<br><br>
<div class="connexion">
  <input type="button" name="connect" value="Connexion" class="connect">
  <br><br>
      <div class="Noms">
      <label for="nom">Pseudo:</label>
      <input type="text" id="nom" placeholder="Pseudo" />
    </div>
    <div class="prenoms">
      <label for="nom">Votre prénom:</label>
      <input type="text" id="prenom" placeholder="Prénom" />
    </div>
    <div class="E-mail">
      <label for="email">Votre E-mail: </label>
  			   <input type="email" id="email" name="mail" placeholder="contact@exemple.com"/>
         </div>
         <div class="type">
           <label for="nom">Sujet du message:</label>
           <input type="text" id="sujet" placeholder="sujet" /><br>
         </div>
              <div class="message">
                <label for="nom">Votre commentaire:</label>
                <textarea id="commentaire" placeholder="Indiquez votre message"></textarea>
              </div>
              <div class="bouton">
              <button type="button" name="button" onclick="bouton();">Envoyer votre message</button>
              </div>

</div>















<?php include '../fichier_inc/footer.inc.php'; ?>
