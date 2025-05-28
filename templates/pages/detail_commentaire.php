<?php

/* 

Template de page compléte : met en forme le détail d'un commentaire 
avec 2 boutons ; supprimer et retour vers liste commentaire

Paramétres : $com : tableau indéxé avec les champs du commentaire incluant l'Id

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
    <title>Détail du commentaire</title>
</head>
<main>
<body>
    <h1>Détail du commentaire</h1>
    <a href="https://guestbook-juha.play.mywebecom.ovh/lister_commentaire.php">Retourner à la liste des commentaires</a><br><br>
    <p><u>Nom</u> : <?= $com["lastname"] ?><br>
    <p><u>Prénom</u> : <?= $com["firstname"] ?><br>
    <p><u>Durée du séjour</u> : <?= $com["journey"] ?> jours<br>
    <p><u>Date de départ</u> : <?= $com["departure"] ?><br>
    <p><u>Note (sur 5)</u> : <?= $com["rate"] ?></p>
    <p><u>Commentaire</u> : <?= $com["note"] ?></p><br><br>
    <form action="https://guestbook-juha.play.mywebecom.ovh/supprimer_commentaire.php?id=<?= $com["id"] ?>">
        <input type="submit" value="Supprimer"/>      
    </form>
</body>
</main>
</html>