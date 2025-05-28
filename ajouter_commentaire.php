<?php

/*

controleur

rôle : ajouter le commentaire a la BDD
paramétres:
        POST date (date du commentaire)
        id auto-incrémentée dans la bdd

*/

// Initialisations
include "library/init.php";

// affichage des messages d'erreurs
ini_set('display_errors',1);
error_reporting(E_ALL);

// verification que le formulaire est valide
if (empty($_POST["lastname"]) || empty($_POST["firstname"]) || empty($_POST["journey"]) ||
    empty($_POST["departure"]) || empty($_POST["room"]) || empty($_POST["rate"]) || empty($_POST["note"])){
        echo "Formulaire non valide"; //affichage d'un message d'erreur
        include "templates/pages/formulaire_commentaire.php"; // renvoi vers la page formulaire_commentaire.php
        exit; // arrete le script si form invalide
} else {
     $new_com = ["lastname" => $_POST["lastname"],
        "firstname" => $_POST["firstname"],
        "journey" => $_POST["journey"],
        "departure" => $_POST["departure"],
        "room" => $_POST["room"],
        "rate" => $_POST["rate"],
        "note" => $_POST["note"],
        ];
};



// integration dans la BDD
ajouterCommentaire($new_com);

// envoi vers page de remerciement

include "templates/pages/remerciement.php";
