<?php

/*

Template de page compléte : met en forme le formulaire de saisie de commentaire du visiteur dans le guestbook

Paramétre: néant

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
    <title>Formulaire</title>
</head>
<main>
    <body>
        <h1>Merci d'avoir passer votre séjour chez nous!</h1>
        <h2>Dans un souci d'améloration, voulez-vous nous laisser un commentaire?</h2>
        <form action="ajouter_commentaire.php" method="POST">
            <label>Nom :
                <input type="text" name="lastname" value="" required>
            </label><br><br>
            <label>Prénom :
                <input type="text" name="firstname" value="" required>
            </label><br><br>
            <label>Durée du séjour :
                <input type="number" name="journey" value="" required>
            </label><br><br>
            <label>date de départ :
                <input type="date" name="departure" value="" required>
            </label><br><br>
            <label>Numéro de Chambre :
                <input type="number" name="room" value="" required>
            </label><br><br>
            <label>Note de votre séjour ( entre 1 et 5):
                <input type="number" name="rate" value="" required>
            </label><br><br>
            <label>commentaire :
                <input type="textarea" name="note" value="" required>
            </label><br><br>
            <input type="submit" value="Enregistrer"/>
        </form>
        <form action="acces_admin.php" method="post">
            <h2>Accés administrateur</h2>
            <label>Identifiant:
                <input type="text" name="identifiant" value="" required>
            </label>
            <label>Mot de Passe:
                <input type="text" name="mdp" value="" required>
            </label>
            <input type="submit" value="Enregistrer"/>
        </form>
    </body>
</main>
</html>