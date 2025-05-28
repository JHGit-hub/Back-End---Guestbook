<?php

/*

Template de page compléte : met en forme le résumé des informations enregistrer dans le formulaire
avec un message de remerciement

paramétres : $new_com : tableau indéxé issu du form

*/

// affichage des messages d'erreurs

ini_set('display_errors',1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remerciement</title>
</head>
<main>
<body>
    <h1>Merci pour votre commentaire!</h1>
    <h2>Merci de vérifier les informations</h2><br><br>
    <p><u>Nom</u> : <?= $new_com["lastname"] ?><br>
    <p><u>Prénom</u> : <?= $new_com["firstname"] ?><br>
    <p><u>Durée du séjour</u> : <?= $new_com["journey"] ?> jours<br>
    <p><u>Date de départ</u> : <?= $new_com["departure"] ?><br>
    <p><u>Note (sur 5)</u> : <?= $new_com["rate"] ?></p>
    <p><u>Commentaire</u> : <?= $new_com["note"] ?></p><br><br>
    <a href="https://guestbook-juha.play.mywebecom.ovh/accueil.php">Retourner à la l'acceuil</a><br><br>

    <!-- feature a faire si projet terminé 
    <form action="ajouter_commentaire.php?id=<= $new_com["id"] ?>" method="post"> 
        <input type="submit" value="Modifier"/>      
    </form>
    -->
</body>
</main>
</html>