<?PHP

// Initialisations communes à tous les controleurs 
// (à inclure en début de chaque controleur)


// affichage des messages d'erreurs
ini_set('display_errors',1);
error_reporting(E_ALL);


// Charger les différents fichiers de fonctions
include_once "model/commentaire.php";


////////// intégration de la BDD ///////

// creation de la global $bdd
global $bbd;

// créer la chaine de connection
$bdd = new PDO("chaine de connection");

// commande pour afficher les erreurs
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
