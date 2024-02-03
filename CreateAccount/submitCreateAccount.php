<?php
session_start();
include_once('../supplement/variables.php');

$username = $_POST['UserName'];
$password = $_POST['password'];
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))$email = $_POST['email'];
$request = 'INSERT INTO etudiants(username_etud, password_etud, email) VALUES (:username_etud, :password_etud, :email)';
$insert = $mybase->prepare($request);
$insert->execute([
    'username_etud' => $username,
    'password_etud' => password_hash($password,PASSWORD_DEFAULT),
    'email' => $email,
]);

if (isset($_POST['check'])) {
    $_SESSION['LOGGED_USER'] = $username;
}

header("Location: ../accueil/accueil.php?couleur=$_GET[couleur]");
exit;
?>

