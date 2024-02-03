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
    <script>language="javascript" src="../assets/dist/js/jquery.js"</script>
    <script language="javascript" src="mytime.js"></script>
    <?php if (!isset($_GET['couleur'])) :?>
    <link rel="stylesheet" id="couleur" href="../theme/couleur1.css">
    <?php else: ?>
        <link rel="stylesheet" id="couleur"  href="<?php echo '../theme/couleur'.$_GET['couleur'].'.css';?>">
    <?php endif ?>
    <link rel="stylesheet" href="accueil.css">
    <link rel = "stylesheet" href="../carousel/carousel.css">
    <link rel="stylesheet" href="../headfoot/footer.css">
    <link rel="stylesheet" href="../headfoot/header.css">





    <title>Document</title>

</head>


<body Onload="mytime()">
<!-- <span id="color">1<span> -->

<?php include_once('../headfoot/header.php'); ?>
<?php include_once('../carousel/index.html'); ?>

    <div class="iframeContainer">

    <?php if( isset($_GET['couleur'])) :?>
    <?php $src='../infopage/info.php?couleur='.$_GET['couleur'] ?>
        <iframe src="<?php echo $src ?>" name="info" id="info"></iframe>

        <?php else: ?>
            <iframe src="../infopage/info.php?couleur=1" name="info" id="info"></iframe>
        <?php endif ?>
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



