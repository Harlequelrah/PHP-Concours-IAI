<?php session_start(); ?>

<?php
// retenir l'email de la personne connectée pendant 1 an
if(isset($_SESSION['LOGGED_USER']))
setcookie(
    'LOGGED_USER',
    $_SESSION['LOGGED_USER'],
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);
//'secure' => true: Cette option indique que le cookie ne doit être envoyé que via une connexion sécurisée (HTTPS). Cela renforce la sécurité en s'assurant que le cookie est transmis de manière cryptée.

//'httponly' => true: Cette option indique que le cookie ne peut être accédé que via le protocole HTTP, et non pas via des scripts côté client (comme JavaScript). Cela aide à protéger le cookie contre certaines attaques potentielles.
?>
<?php session_destroy() ; ?>
<?php header("Location: ../accueil/accueil.php?couleur=$_GET[couleur]");
exit;?>
