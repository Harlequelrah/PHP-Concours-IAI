<?php
session_start();
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');
$id_etudiant=get_id_etudiant($etudiants,$_SESSION['LOGGED_USER']);
$colonnes=[];
if(isset($_POST['nom'])) $colonnes['nom']=$_POST['nom'];
if(isset($_POST['prenom'])) $colonnes['prenom'] = $_POST['prenom'];
if(isset($_POST['date_naissance']))$colonnes['date_naissance']=$_POST['date_naissance'];
if(isset($_POST['sexe']))$colonnes['sexe']=$_POST['sexe'];
if(isset($_POST['nationalite']))$colonnes['nationalite']=$_POST['nationalite'];
if(isset($_POST['annee_bac']))$colonnes['annee_bac']=$_POST['annee_bac'];
if(isset($_POST['serie']))$colonnes['serie']=$_POST['serie'];
$filesname=['document_naissance','document_nationalite','document_attestation_bac','photo'];
foreach($filesname as $file){
    if(isset($_FILES[$file]) && file_exists($_FILES[$file]['tmp_name'])&& $_FILES[$file]['error'] == UPLOAD_ERR_OK && $_FILES[$file]['size']<=16000000) {
        $file_name=$_FILES[$file]['tmp_name'];
        $file_info=pathinfo($_file_name);
        $extension=$file_info['extension'];
        $ext=pathinfo($file_name)['extension'];
        $isAllowed=['gif','png','jpg','jpeg','pdf'];
        if(in_array($extension,$isAllowed)){
            $exficher=$mybase->prepare("SELECT $ficher FROM candidats where id_etudiant=$id_etudiant");
            $exficher->execute();
            $recupficher=$exficher->fetchAll();
            $ancienficher=$recupficher[0][0];
            $chemin="../ficherconcours/$file/".$id_etudiant.basename($file_name);
            if (file_exists($ancienfichier))
                // Supprimer le fichier
                unlink($ancienfichier);
            move_uploaded_file($file_name,$chemin);
            $insert=$mybase->prepare("UPDATE candidats SET $file=:$file WHERE id_etudiant=$id_etudiant");
            $insert->execute([$file=>$chemin],);
        }

    }
}

foreach($colonnes as $cle=>$valeur){
$insert=$mybase->prepare("UPDATE candidats SET $cle=:$cle WHERE id_etudiant=$id_etudiant");
$insert->execute([$cle=>$valeur],);

}

header("Location:../consultercandidature/consultercandidature.php");

?>
