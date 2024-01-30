
<?php
include_once('variables.php');
include_once('functions.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email=$_POST['email'];
  $username=$_POST['username'];

  if ( in_array($username,get_usernames($etudiants)) && in_array($email,get_emails($etudiants)) ){
       require '../../../PHPMailer/src/PHPMailer.php';
       require '../../../PHPMailer/src/Exception.php';




       require '../../../vendor/autoload.php';
       $mail = new PHPMailer(true);

       try {
         //Server settings
         $mail->isSMTP();
         $mail->Host = 'sandbox.smtp.mailtrap.io';
         $mail->SMTPAuth = true;
         $mail->Port = 2525;
         $mail->Username = '3dd40e8b0a9ab1';
         $mail->Password = 'f0a28cd93606ab';

         //Recipients
         $mail->setFrom('Administrateur-iai-concours@gmail.com', 'Admin001');
         $mail->addAddress($email, $username);

         //Content
         $mail->isHTML(true);
         $mail->Subject = 'Recuperation du mot de passe utilisateur';
         $token=mt_rand(1,100000000);
         setcookie(
            'token',
            $token,
            [
                'expires' => time() + 24*3600,
                'secure' => true,
                'httponly' => true,
            ]
          );
         $mail->Body    = "<a href='http://localhost:8080/PHP-PROJECT/current/supplement/recuperation.php?token=$token'>changer mon mot de passe</a>";

         $mail->send();
         $succes=true;
        }
        catch (Exception $e) {
          echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";

        }



    }
    else{
        header("Location: recuperation2.php?message=Veuillez reverifier votre nom d 'utilisateur et votre email ");
        exit();
    }
    if (isset($succes)&&$succes){header("Location:../accueil/accueil.php?message='Email envoyé avec succes vers $email'");exit();}
}
?>





