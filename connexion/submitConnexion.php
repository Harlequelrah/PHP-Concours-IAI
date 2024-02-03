<?php session_start() ;?>
<?php
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');
?>

<?php



if (isset($_POST['UserName']) &&  isset($_POST['password'])) {
        if (in_array($_POST['UserName'],get_usernames($etudiants))){
            // if($_POST['password']===get_password($etudiants,($_POST['UserName']))){
                if(password_verify($_POST['password'],get_password($etudiants,($_POST['UserName'])))){
                $_SESSION['LOGGED_USER'] = $_POST['UserName'];
            }

            else

            $_SESSION['error_password']='Veuillez verifier le mot de passe que vous avez saisi ( '.$_POST['password'].' ) car il est incorrect et donc ne permet pas de vous authentifier';
        }
        else{
           $_SESSION['error_username']='Veuillez verifier le nom d \'utilisateur que vous avez saisi ( '.$_POST['UserName'].' ) car il est incorrect et donc ne permet pas de vous authentifier';
        }
}


    if (isset( $_SESSION['LOGGED_USER'])){
        echo $_GET['couleur'];
         header("Location: ../accueil/accueil.php?couleur=$_GET[couleur]");
         exit;
        }
    else{


        header("Location: ../connexion/Connexion.php?couleur=$_GET[couleur]");
        exit;
       }


?>
