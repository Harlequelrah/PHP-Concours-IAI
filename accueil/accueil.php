<?php session_start() ; ?>
<?php include_once('../supplement/variables.php');
include_once('../supplement/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" src="https://code.jquery.com/jquery-3.7.1.js"> </script>
    <script language="javascript" src="mytime.js"></script>
    <link rel="stylesheet" id="couleur" href="../theme/couleur1.css">
    <link rel="stylesheet" href="accueil.css">
    <link rel = "stylesheet" href="../carousel/carousel.css">
    <link rel="stylesheet" href="../headfoot/footer.css">
    <link rel="stylesheet" href="../headfoot/header.css">
     <style>
      #color{
        visibility:none;
      }
     </style>

    <title>Document</title>

</head>


<body Onload="mytime()">
<!-- <span id="color">1<span> -->

<?php include_once('../headfoot/header.php'); ?>
<?php include_once('../carousel/index.html'); ?>

    <div class="iframeContainer">

        <iframe src="../infopage/info.php?couleur=1" name="info" id="info"></iframe>
        <iframe src="../infopage/infopage.html" name="infopage" id="infopage"></iframe>

    </div>

<?php include_once('../headfoot/footer.html'); ?>
<?php
if (isset($_GET['message'])) {
    echo '<script>window.alert("' . $_GET['message'] . '")</script>';
}
?>


<script language="javascript" src="accueil.js"></script>


</body>



</html>


