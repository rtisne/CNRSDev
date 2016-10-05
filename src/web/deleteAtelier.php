<?php
include_once "connexion.php";

if(isset($_GET['id'])){

	$id_atelier = $_GET['id'];

    $count = $db->exec('DELETE FROM ateliers WHERE id = '.$id_atelier);

	if($count > 0){
		header('Location: listAtelier.php');
	}else{
		print("Aucun atelier à supprimer.\n");
		header('Location: listAtelier.php');
	}
} else {
	header('Location: listAtelier.php');
}
?>
