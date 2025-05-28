<?PHP

/*

Template de page compléte: met en forme la liste des commentaires avec un bouton pour filtrer

Paramétres : $liste : tableau simple ordonné des commentaires à afficher, chaque commentaires étant 
un tableau indexé avec ses champs

afficher l'en-tête en HTML

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
    <title>Liste des commentaires</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td, th{
            border: 1px solid grey;
            padding: 3px;
        }
    </style>
</head>
<main>
    <body>
        <h1>Tableaux des commentaires</h1>
        <form action="lister_commentaire.php" method="POST">
            <label>Filtrer par note :
                <input type="number" name="rate_mini"/>
            </label>
            <input type="submit" value="Filtrer"/>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de départ</th>
                    <th>Note (sur 5)</th>
                    <th>Voir Détail</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                // Pour chaque commentaire de la liste
                foreach($liste as $com) {
                    // On affiche la ligne de chaque commentaire 
                    // en utilisant le template de fragment trcommentaires
                    include "templates/fragments/trcommentaires.php";
                }
                ?>
            </tbody>
        </table>
    </body>
</main>
</html>