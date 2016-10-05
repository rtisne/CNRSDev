<?php
include("header.template.php");
include("footer.template.php");

include("connexion.php");


echo '<center><FONT size="15pt"><B>Listes des Ateliers</B></FONT></center><br><br>';
$reponse=$db->query("SELECT id, titre , etat , theme , type , lieu , duree , capacite , resume FROM ateliers ORDER BY id ASC");
$Nbrligne = 0;

echo '<table border="1">';
while ($donnees=$reponse->fetch()){
echo '<tr>';

echo '<td>';
echo $donnees["id"] ;
echo '</td>';

echo '<td>';
echo $donnees["titre"];
echo '</td>';

echo '<td>';
echo $donnees["etat"] ;
echo '</td>';

echo '<td>';
echo $donnees["theme"] ;
echo '</td>';

echo '<td>';
echo $donnees["type"] ;
echo '</td>';

echo '<td>';
echo $donnees["lieu"] ;
echo '</td>';

echo '<td>';
echo $donnees["duree"] ;
echo '</td>';

echo '<td>';
echo $donnees["capacite"] ;
echo '</td>';

echo '<td>';
echo $donnees["resume"] ;
echo '</td>';

echo '<td>';
echo '<a href="updateAtelier.php?id='.$donnees["id"].'">Modifier</a>';
echo '</td>';

echo '<td>';
echo '<a href="deleteAtelier.php?id='.$donnees["id"].'">Supprimer</a>';
echo '</td>';

echo '</tr>';
}
echo '</table>';

?>
