<?php

// function de manipulation des commentaires

// ajouter_commentaire
// filtrer_commentaire
// supprimer_commentaire
// lister_commentaire
// afficher_commentaire

function ajouterCommentaire($new_com){
    // rôle : ajouter un nouveau commentaire dans la BDD
    // paramétre : $new_com tableau indéxé contenant lastname, first name, etc...
    // retour : true si reussi, false sinon


    // construire la requête sql pour inserer une nouvelle ligne dans le tableau
    $sql = "INSERT INTO `guestbook`(`lastname`, `firstname`, `journey`, `departure`, `room`, `rate`, `note`)
            VALUES (:lastname, :firstname, :journey, :departure, :room, :rate, :note)";

    $param = [":lastname" => $new_com["lastname"],
            ":firstname" => $new_com["firstname"],
            ":journey" => $new_com["journey"],
            ":departure" => $new_com["departure"],
            ":room" => $new_com["room"],
            ":rate" => $new_com["rate"],
            ":note" => $new_com["note"],
        ];

    // preparer et executer la requête
    global $bdd;
    $req = $bdd->prepare($sql);

    $cr = $req->execute($param);

    //verifier que l'insertion a fonctionné
    if ($cr) {
        return true; // Succès
    } else {
        echo "Erreur lors de l'ajout du commentaire";
        return false; // Échec
    }

}

function listerCommentaire($rate_mini){
    // rôle : lister les commentaires dont la note est <= rate_mini ou tous si valeur par defaut
    //paramétre:
    //          $rate_mini valeur limite de la notation ou 5 par defaut
    //          $bdd ou sont stocker les données
    // retour : affiche un tableau indéxé dans la page liste_commentaire les commentaires filtrés
    // ou tous les commentaires par défaut

    global $bdd;

    //construire la requête sql
    $sql = "SELECT `id`, `lastname`, `firstname`, `journey`, `departure`, `room`, `rate`, `note` FROM `guestbook` WHERE `rate` <= :rate_mini";
    $param = [":rate_mini" => $rate_mini];

    //préparer la requête
    $req = $bdd->prepare($sql);

    // exécute la requête
    $cr = $req->execute($param);
    if (!$cr) {
        echo "Erreur sur requête $sql"; // échec
        return [];
    };

    // récupére les lignes qu'elle a extraite
    $lignes = $req->fetchAll(PDO::FETCH_ASSOC);

    // on va créér un tableau de résultat au bon format pour les affichers
    // en utilisant l'id comme index
    $resultat = [];

    foreach($lignes as $index => $tblCommentaire) {
        $resultat[ $tblCommentaire["id"] ] = $tblCommentaire;
    }

    // Retourne le résultat
    return $resultat;
}

function voirDetail($id){
    // rôle : récupérer un commentaire dans la bdd a partir de son id
    // paramétre:
    //          $id : id du commentaire à recupérer
    // retour : tableau indéx avec toutes les informations du commenaitres
    //          ou false si inexsitant

    // Récupérer la base données ouverte en variable globale
    global $bdd;

    // construire la requête
    $sql = "SELECT `id`, `lastname`, `firstname`, `journey`, `departure`, `room`, `rate`, `note` FROM `guestbook` WHERE `id` = :id";
    $param = [":id"=>$id];

    // prepare la requête
    $req = $bdd->prepare($sql);

    // execute la requête
    $cr = $req->execute($param);
    if (!$cr) {
        echo "Erreur sur requête $sql";  // échec
        return [];
    }

    // récupére les lignes qu'elle a extraite
    $lignes = $req->fetchAll(PDO::FETCH_ASSOC);

    if (count($lignes) != 1) {                  
        // On n'a pas de commentaire avec cet id
        return false;
    }

    // Le commentaire est la première ligne (et seule ligne)
    $resultat = $lignes[0];

    // Retourne le résultat
    return $resultat;
}

function supprimerCommentaire($id){
    // rôle : supprimer un commentaire dans la bdd
    // paramétre : 
    //          $id : id du commentaire à supprimer
    // retour : retour a la liste des articles

    // Récupérer la base données ouverte en variable globale
    global $bdd;

    // construire la requête
    $sql = "DELETE FROM `guestbook` WHERE `id` = :id";
    $param = [":id"=>$id];

    // prepare la requête
    $req = $bdd->prepare($sql);

    // execute la requête
    $cr = $req->execute($param);
    if (!$cr) {
        echo "Erreur lors de la suppression du commentaire";  // échec
        return false;
    } else {
        echo "Commentaire supprimer avec succés"; // succés
        return true;
    };

}