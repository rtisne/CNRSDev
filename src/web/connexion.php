<?php
// $user = get_current_user();
// $mdp = '';   /*Votre mots de passe*/
// $server = 'dbserver'; /*le nom de la base au cremi c'est celui là */
include "env.php";
try
{
    $db = new PDO('mysql:host='.$DB_HOST.';dbname='.$DB_NAME.';charset=utf8', $DB_USER, $DB_PASSWORD);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


?>
