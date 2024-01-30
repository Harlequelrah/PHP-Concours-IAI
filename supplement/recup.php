<?php
include_once('variables.php');
include_once('functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nvpassword=$_POST['mdp'];
  $email=$_POST['email'];
  $username=$_POST['username'];

  if ( in_array($username,get_usernames($etudiants)) && in_array($email,get_emails($etudiants)) ){
      if($nvpassword!=get_password_by_email($etudiants,$email)) {
         $request='UPDATE  etudiants set password_etud = :password_etud where email = :email and username_etud = :username_etud';
         $update=$mybase->prepare($request);
         $update->execute([
            'password_etud'=>password_hash($nvpassword,PASSWORD_DEFAULT),
            'email'=>$email,
            'username_etud'=>$username,

         ]
         );
        }

        header("Location: ../connexion/connexion.php");
        exit();
    }
    else{
        header("Location: recuperation.php?message=Veuillez reverifier votre nom d 'utilisateur et votre email ");
        exit();
    }


}
?>

