# domotique

Ajouter un fichier "config.php" dans le dossier "Config" avec ce contenu : 

<?php


$username="utilisateur mysql";
$password="mot de passe correspondant";
$host="serveur mysql";
$dbname="nom de la base";

$dsn="mysql:host=$host;dbname=$dbname";

define("USERNAME",$username);
define("PASSWORD",$password);
define("DSN",$dsn);


// Vues : 

$vues['erreur']='Vue/vueErreur.php';
$vues['home']='Vue/index.php';
$vues['seConnecter']='Vue/ConnectionAdmin.php';
$vues['creationCompte']='Vue/creerCompte.php';
?>
