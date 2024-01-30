<?php
include_once('../supplement/variables.php');
if (isset($_POST['email-contact']) && isset($_POST['message-contact'])){
    $insert=$mybase->prepare("INSERT INTO message values (:email,:message)");
    $insert->execute(['email'=>$_POST['email-contact'], 'message'=>$_POST['message-contact']]);
}
header("../accueil/accueil.php");
exit;
?>
