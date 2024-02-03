<?php session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Connexion.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo '../theme/couleur'.$_GET['couleur'].'.css';?>">
</head>
<?php $action='submitConnexion.php?couleur='.$_GET['couleur'] ;?>
<body>
    <div class="erreur">
        <p><?php if(isset($_SESSION['error_username'])) echo $_SESSION['error_username'] ;?></p>
        <p><?php if(isset($_SESSION['error_password'])) echo $_SESSION['error_password'] ;?></p>
    </div>
   <div class="box">
    <span class="borderLine"></span>

    <form method="POST" action="<?php echo $action ?>" >
        <h2 id="seconnecter">Se Connecter</h2>
        <div class="inputBox">
            <input type="text" required name="UserName">
            <span>Nom d'Utilisateur</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" id="password" required name="password">
            <span>Mot de Passe</span>
            <i></i>
        </div>
        <div class="link">
            <a  href="../supplement/recuperation.php">Mot de Passe Oublié</a>
        </div>
        <input type="submit" value="Login">
    </form>
   </div>
</body>
</html>
<?php session_destroy() ;?>
