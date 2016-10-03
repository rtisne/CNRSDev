<?php
$user = get_current_user();
$mdp = '';   /*Votre mots de passe*/
$server = 'dbserver'; /*le nom de la base au cremi c'est celui là */
$connection = mysql_connect($server , $user , $mdp); 
if ($connection == false) {
  echo "DEBUG".$connection."<BR>";
	exit;
}
else
   echo "CONNECTED !!!";

?>
