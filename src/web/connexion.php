<?php
// $user = get_current_user();
// $mdp = '';   /*Votre mots de passe*/
// $server = 'dbserver'; /*le nom de la base au cremi c'est celui là */
include "env.php";
$connection = mysql_connect($HOST_BD , $USER_BD , $PASSWORD_BD);
if ($connection == false) {
  echo "DEBUG".$connection."<BR>";
	exit;
}
else
   echo "CONNECTED !!!";

?>
