<?php session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../Connexion.css" rel="stylesheet">
</head>
<body>
   <div class="box">
    <span class="borderLine"></span>
    <form method="POST" action="submitformulairedesdates.php">
        <h2>Formulaire des dates </h2>
        <div class="inputBox">
            <input type="date"  name="date_concours">
            <span>date du concours</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="date"  name="date_limite_inscription">
            <span>date de limite d inscription</span>
            <i></i>
        </div>
        <input type="submit"  id="soumettre" value="Soumettre">
    </form>
   </div>
</body>
</html>
<?php //session_destroy() ;?>
