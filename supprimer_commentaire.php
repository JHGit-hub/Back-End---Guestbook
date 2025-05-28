<?php

/*

controleur

rôle : supprimer le commentaire de la bdd
paramétre:
        GET id : clé primaire du commentaire à supprimer

*/

// Initialisations
include "library/init.php";

// affichage des messages d'erreurs
ini_set('display_errors',1);
error_reporting(E_ALL);

// Récupère les paramètre : id (du commentaire)
if (isset($_GET["id"])) {
        $id = $_GET["id"];
} else {
        $id = 0;
};

// Supression du commentaire
supprimerCommentaire($id);

// rechargement de la liste des commentaires
$liste = listerCommentaire($rate_mini=5);

// retour à la page liste_commentaire
include "templates/pages/liste_commentaire.php";