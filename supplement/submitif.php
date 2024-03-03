<?php
session_start();
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');






$id_etudiant=10;

$filesname=['document_naissance','document_attestation_bac','photo'];
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

?>
