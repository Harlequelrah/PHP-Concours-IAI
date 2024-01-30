<?php session_start() ;?>
<?php
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');
?>

<?php
if (isset($_POST['UserName']) &&  isset($_POST['password'])) {
        if (in_array($_POST['UserName'],get_admins_usernames($administrateurs))){
            if($_POST['password']===get_admin_password($administrateurs,($_POST['UserName']))){
                $_SESSION['LOGGED_ADMIN'] = $_POST['UserName'];
            }
            else
            $_SESSION['error_password']='Veuillez verifier le mot de passe que vous avez saisi ( '.$_POST['password'].' ) car il est incorrect et donc ne permet pas de vous authentifier';
        }
        else{
           $_SESSION['error_username']='Veuillez verifier le nom d \'utilisateur que vous avez saisi ( '.$_POST['UserName'].' ) car il est incorrect et donc ne permet pas de vous authentifier';
        }
}




        header("Location: admin.php");
        exit;
       


?>
