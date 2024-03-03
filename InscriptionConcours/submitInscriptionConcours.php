<?php
session_start();
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');

$query = "SELECT MAX(id_candidat) AS max_id FROM candidats";
$result = $mybase->query($query)->fetch(PDO::FETCH_ASSOC);
$last_id = $result['max_id'];


if ($last_id === null) {
    $last_id = 0;
}


$query = "ALTER TABLE candidats AUTO_INCREMENT = " . ($last_id + 1);
$mybase->exec($query);

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance=$_POST['date_naissance'];
$sexe=$_POST['sexe'];
$nat=$_POST['nat'];
$bacII=$_POST['bacII'];
$serie=$_POST['serie'];


$id_etudiant=get_id_etudiant($etudiants,$_SESSION['LOGGED_USER']);
$request = 'INSERT INTO candidats(nom,prenom,date_naissance,sexe,nationalite,annee_bac,serie,id_etudiant) VALUES (:nom,:prenom,:date_naissance,:sexe,:nationalite,:annee_bac,:serie,:id_etudiant)';
$insert = $mybase->prepare($request);
$insert->execute([
    'nom'=>$nom,
    'prenom'=>$prenom,
    'date_naissance'=>$date_naissance,
    'sexe'=>$sexe,
    'nationalite'=>$nat,
    'annee_bac'=>$bacII,
    'serie'=>$serie,
    'id_etudiant'=>$id_etudiant,
]);

$filesname=['document_naissance','document_nationalite','document_attestation_bac','photo'];
foreach($filesname as $file){
    if(isset($_FILES[$file]) && file_exists($_FILES[$file]['tmp_name'])&& $_FILES[$file]['error'] == UPLOAD_ERR_OK && $_FILES[$file]['size']<=16000000) {
        $file_info=pathinfo($_FILES[$file]['name']);
        $extension=$file_info['extension'];
        $isAllowed=['gif','png','jpg','jpeg','pdf'];
        if(in_array($extension,$isAllowed)){

           $chemin = "../ficherconcours/$file/".$file."_candidat_$id_etudiant.".$extension;
            $file_name=$_FILES[$file]['tmp_name'];
            move_uploaded_file($file_name,$chemin);
            $insert=$mybase->prepare("UPDATE candidats SET $file=:$file WHERE id_etudiant=$id_etudiant");
            $insert->execute([$file=>$chemin],);
        }

    }
}
header("Location:../consultercandidature/consultercandidature.php");
// header("Location:../consultercandidature/consultercandidature.php?act=refresh");
exit();
?>
