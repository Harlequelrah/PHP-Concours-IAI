<?php session_start();
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');
$id_etudiant=get_id_etudiant($etudiants,$_SESSION['LOGGED_USER']);
$request="DELETE from candidats where id_etudiant=$id_etudiant";
$info_candidat=$mybase->prepare($request);
$info_candidat->execute();
header("Location:../accueil/accueil.php?message=Votre candidature a bien été supprimée");
exit;
?>


