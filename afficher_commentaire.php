<?php

/*

controleur

rôle : recuperer le commentaire dans la bdd 
paramétres : 
        GET id : clé primaire du commentaire selectionné

*/

// Initialisations
include "library/init.php";

// affichage des messages d'erreurs
ini_set('display_errors',1);
error_reporting(E_ALL);

// Récupère les paramètre : id (de l'article)
if (isset($_GET["id"])) {
        $id = $_GET["id"];
} else {
        $id = 0;
};

// on récupére les details du commentaire
$com = voirDetail($id);

// on affcihe le résultat
include "templates/pages/detail_commentaire.php";