<?php session_start() ;
include_once('../supplement/variables.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="CreateAccount.css" rel="stylesheet"/>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de Mot de Passe</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
   <div class="box">
    <span class="borderLine"></span>
    <form method="POST" action="submitCreateAccount.php" id="formulaire" >
        <h2>Créer Compte</h2>
        <div class="inputBox">
            <input type="text" required name="UserName">
            <span>Utilisateur</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="email" required name="email">
            <span>Adresse E-mail</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" required name="password" id="password" minlength="8" oninput="checkSpacesOnInput()">
            <span>Mot de Passe</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" required name="password2" id="password2" minlength="8" oninput="checkSpacesOnInput()">
            <span>Entrer à nouveau Mot de Passe</span>
            <i></i>
        </div>

             <input type="submit" value="Sign Up">
        <div class="inputBox" id="flax">
            <span>Restez connecter</span><input id="check" name="check" type="checkbox" checked>
        </div>

    </form>
   </div>
<script language="javascript" src="CreateAccount.js"></script>

</body>
</html>
