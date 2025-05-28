<?php

/*

controleur

rôle : péparer la page d'accueil avec le formulaire de saisie du commentaire
paramétre: néant

*/

// Initialisations
include "library/init.php";

// affichage des messages d'erreurs
ini_set('display_errors',1);
error_reporting(E_ALL);

//Afficher la page formulaire_commentaire.php;

include "templates/pages/formulaire_commentaire.php";