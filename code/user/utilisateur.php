<?php include '../fichier_inc/header.inc.php'; ?>

<?php
  if (!isset($_SESSION['Login'])) {
    echo "<div class=\"utilisateur\">
    <p class='centrer'> Connectez-vous pour pouvoir accéder à vos livres favoris ! </p>
    </div>";
  }
  else {
    $IDClientResult= $pdo->query('SELECT CliID FROM client WHERE Clipseudo="'.$_SESSION['Login'].'"');
    $IDClient = $IDClientResult -> fetch(PDO::FETCH_ASSOC);

    $mot_de_passeResult = $pdo->query('SELECT CliMdp FROM client WHERE CliID="'.$IDClient['CliID']. '"');
    $mot_de_passe = $mot_de_passeResult -> fetch(PDO::FETCH_ASSOC);

    $nomResult = $pdo->query('SELECT CliNom FROM client WHERE CliID="'.$IDClient['CliID']. '"');
    $nom = $nomResult -> fetch(PDO::FETCH_ASSOC);

    $prenomResult = $pdo->query('SELECT CliPrenom FROM client WHERE CliID="'.$IDClient['CliID']. '"');
    $prenom = $prenomResult -> fetch(PDO::FETCH_ASSOC);

    $dateNaissanceResult = $pdo->query('SELECT CliBirthDate FROM client WHERE CliID="'.$IDClient['CliID']. '"');
    $dateNaissance = $dateNaissanceResult -> fetch(PDO::FETCH_ASSOC);

    $sexeResult = $pdo->query('SELECT CliSex FROM client WHERE CliID="'.$IDClient['CliID']. '"');
    $sexe = $sexeResult -> fetch(PDO::FETCH_ASSOC);

    $mailResult = $pdo->query('SELECT CliMail FROM client WHERE CliID="'.$IDClient['CliID']. '"');
    $mail = $mailResult -> fetch(PDO::FETCH_ASSOC);

    $adresseVilleResult = $pdo->query('SELECT AdrVille FROM adresse WHERE CliID="'.$IDClient['CliID']. '"');
    $adresseVille = $adresseVilleResult -> fetch(PDO::FETCH_ASSOC);

    $adresseNomRueResult = $pdo->query('SELECT AdrRue FROM adresse WHERE CliID="'.$IDClient['CliID']. '"');
    $adresseNomRue = $adresseNomRueResult -> fetch(PDO::FETCH_ASSOC);

    $adresseCPResult = $pdo->query('SELECT AdrPostal FROM adresse WHERE CliID="'.$IDClient['CliID']. '"');
    $adresseCP = $adresseCPResult -> fetch(PDO::FETCH_ASSOC);

    $adresseNumRueResult = $pdo->query('SELECT AdrRueNum FROM adresse WHERE CliID="'.$IDClient['CliID']. '"');
    $adresseNumRue = $adresseNumRueResult -> fetch(PDO::FETCH_ASSOC);

    $adresseCAResult = $pdo->query('SELECT AdrComplement FROM adresse WHERE CliID="'.$IDClient['CliID']. '"');
    $adresseCA = $adresseCAResult -> fetch(PDO::FETCH_ASSOC);

    
    echo "<div class=\"utilisateur\">
         <div class=\"blanc\">
         <div class=\"livrePref\">
           <img src=\"../Images/avatar.jpg\" alt=\"avatar\" class=\"avatar\">
         </div>
         <div class=\"favco\">
           <div class=\"param\">
             <H1 class=\"h1\">Pseudo</H1> 
             <p class\"pageUtilisateur\">Pseudo: ".$_SESSION['Login']." </p>
             <p class\"pageUtilisateur\">Mot de passe: ".$mot_de_passe['CliMdp']." (Crypté) </p>
             <p class\"pageUtilisateur\">Nom: ".$nom['CliNom']." </p>
             <p class\"pageUtilisateur\">Prénom: ".$prenom['CliPrenom']." </p>
             <p class\"pageUtilisateur\">Date de naissance: ".$dateNaissance['CliBirthDate']." </p>
             <p class\"pageUtilisateur\">Sexe: ".$sexe['CliSex']." </p>
             <p class\"pageUtilisateur\">Mail: ".$mail['CliMail']." </p>
             <p class\"pageUtilisateur\">Adresse: ".$adresseNumRue['AdrRueNum']." ".$adresseNomRue['AdrRue']." ".$adresseCP['AdrPostal']." ".$adresseVille['AdrVille']." ".$adresseCA['AdrComplement']." </p>
             
             
             
             

             <a href=\"../vos_commandes/voscommandes\"><button type=\"button\" class=\"comm\" name=\"button\">Mes commandes</button></a>
             <br><br>
           </div>
           <div class=\"favoris\">
             <h2>Le remède mortel</h2>
             <h5>Auteur: James DASHNER</h5>
             <img src=\"../Images/remede.JPG\" alt=\"Dylan\" class=\"dylan\">
             <p>Le WICKED a tout volé à Thomas : sa vie, sa mémoire et maintenant ses seuls amis. Mais
                l'épreuve touche à sa fin. Ne reste qu'un dernier test... Terrifiant. Cependant, Thomas
                 a retrouvé assez de souvenirs pour ne plus faire confiance à l'organisation.
                 Il a triomphé du Labyrinthe. Il a survécu à la Terre Brûlée. Il fera tout pour
                  sauver ses amis, même si la vérité risque de provoquer la fin de tout.</p>
           </div>
       </div>
     </div>
       <br><br><br><br><br><br>
       <div class=\"lastAchat\">
         <h2>Mes livres</h2>
            <img src=\"../Images/placeholder.png\" alt=\"place\" class=\"holder\">
            <img src=\"../Images/placeholder.png\" alt=\"place\" class=\"holder\">
            <img src=\"../Images/placeholder.png\" alt=\"place\" class=\"holder\">
            <img src=\"../Images/placeholder.png\" alt=\"place\" class=\"holder\">
            <img src=\"../Images/placeholder.png\" alt=\"place\" class=\"holder\">
            <img src=\"../Images/placeholder.png\" alt=\"place\" class=\"holder\">
            <img src=\"../Images/placeholder.png\" alt=\"place\" class=\"holder\">
            <img src=\"../Images/placeholder.png\" alt=\"place\" class=\"holder\">
            <img src=\"../Images/placeholder.png\" alt=\"place\" class=\"holder\">
       </div>
     </div>";
  }
?>


<?php include '../fichier_inc/footer.inc.php'; ?>
