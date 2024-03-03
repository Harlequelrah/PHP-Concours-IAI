<?php
include_once('../supplement/variables.php');
if(isset($_POST['email-contact']))$contact=$_POST['email-contact'];
else $contact="anonyme";
if (isset($contact) && isset($_POST['message-contact'])){
    $insert=$mybase->prepare("INSERT INTO message values (:email,:message)");
    $insert->execute(['email'=>$contact, 'message'=>$_POST['message-contact']]);
    $contact_success="Nous avons bien reçu votre email";
}
$redirection=(isset($_GET['couleur']))?'couleur=&':'';
header("Location:../accueil/accueil.php$redirection?contact_success=$contact_success");
exit;
?>
