<?php

/*

controleur

rôle : donner accés à la liste des commentaires de la bdd 
paramétres : 
        valeur par défaut de rate_mini soit 5

*/

// Initialisations
include "library/init.php";

// affichage des messages d'erreurs
ini_set('display_errors',1);
error_reporting(E_ALL);

// On verifie que les champs sont rempli qvec les bons identifiant et mdp
if(!isset($_POST["identifiant"]) || !isset($_POST["mdp"]) || $_POST["identifiant"]!== "admin" || $_POST["mdp"] !== "admin"){
        echo "accés refusé";
        include "accueil.php"; // si false, on arrete le scriot et on renvoi a l'acceuil
        exit;
} else {
        echo "accés validé";
};


// on applique le filtre à la liste
$liste = listerCommentaire(5);


include "templates/pages/liste_commentaire.php";