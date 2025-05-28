<?php

/*

controleur
rôle : extraire les commentaires avec une note inférieur à une valeur donnée ou max par défaut
paramétre:
        $rate_mini : valeur limite de la notation

*/

// Initialisations
include "library/init.php";

// affichage des messages d'erreurs
ini_set('display_errors',1);
error_reporting(E_ALL);

// On verifie qu'un filtre a étè demandé avec le form
if(isset($_POST["rate_mini"]) && $_POST["rate_mini"] < 5 && $_POST["rate_mini"] > 0){
        $rate_mini = $_POST["rate_mini"];
} else {
        $rate_mini = 5;
};


// on applique le filtre à la liste
$liste = listerCommentaire($rate_mini);

include "templates/pages/liste_commentaire.php";