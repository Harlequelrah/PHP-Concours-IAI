<?php session_start();
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');
$id_etudiant=get_id_etudiant($etudiants,$_SESSION['LOGGED_USER']);
$request="SELECT * from candidats where id_etudiant=$id_etudiant";
$info_candidat=$mybase->prepare($request);
$info_candidat->execute();
$candidat_logged=$info_candidat->fetchAll();
if (empty($candidat_logged)){
    header("Location:../accueil/accueil.php?message=Votre candidature a bien été supprimée");
exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="consultercandidature.css">
    <?php if (isset($_GET['couleur']) &&  $_GET['couleur'] != 1) : ?>

    <link rel="stylesheet" href="<?php echo '../theme/couleur'.$_GET['couleur'].'.css';?>">
    <?php endif ?>
    <title>Consulter Sa Candidature</title>
</head>

<body>
<?php foreach($candidat_logged as $clg): ?>
    <div class="box">
        <span class="borderLine"></span>
        <form method="POST" action="" enctype="multipart/form-data">
        <p id="laglink"> Utilisateur :<a href="../supplement/logout.php"><?php echo $_SESSION['LOGGED_USER'] ;?></a></p>
            <h2>Consultation de votre candidature </h2>
            <div class="inputBox">
                <span>Nom</span >
                <span class="consulteside"><?php echo $clg['nom']; ?></span>
            </div>
             <div class="inputBox">
                <span> Prénoms</span>
                <span class="consulteside"><?php echo $clg['prenom']; ?></span>
            </div>
             <div class="inputBox" style="display:flex;  align-items: center; margin-left:100px;" align="center" >
                <span> photo</span>
                <?php //$_SESSION['image']=($clg['photo']);?>
                <img src="<?php echo $clg['photo'] ;?>" height="250px;"style="width:150px;margin-left: 10px" alt="">
                 <!-- <span><a href="telecharger.php" id="downloadLink">Télécharger l'image</a><span> -->



            </div>

            <div class="inputBox">

                <span>Date de naissance</span>
                <span class="consulteside"><?php echo $clg['date_naissance']; ?></span>

            </div>
            <div class="inputBox">

                <span>Nationnalité</span>
                <span class="consulteside"><?php echo $clg['nationalite']; ?></span>

            </div>
            <div class="inputBox">
                <span> Serie</span>
                <span class="consulteside"><?php echo $clg['serie']; ?></span>
            </div>
            <div class="inputBox">
                <span> Année Obtention Bac II</span>
                <span class="consulteside"><?php echo $clg['annee_bac']; ?></span>

            </div>

                <div class="inputBox">
                        <span>SEXE</span>
                        <span class="consulteside"><?php echo $clg['sexe']; ?></span>
           </div>

            <div class="inputBox">
                <span>Acte de naissance</span>
                <?php  if(isset($clg['document_naissance'])):;?>
                 <span><button class="pdf"  Onclick="openPDF1()">Ouvrir PDF1</button></span>
                <?php else: ?>
                 <span> Document manquant</span>
                 <?php endif; ?>
            </div>
            <div class="inputBox">
                <span>Copie de la Nationnalité</span>
                <?php  if(isset($clg['document_nationalite'])):;?>
                <span><button class="pdf"  Onclick="openPDF2()">Ouvrir PDF2</button></span>
                <?php else: ?>
                <span> Document manquant</span>
                <?php endif; ?>

            </div>
            <div class="inputBox">
                <span>Attestation du  BAC II</span>
                <?php  if(isset($clg['document_attestation_bac'])):;?>
               <span><button class='pdf' Onclick='openPDF3()' >Ouvrir PDF3</button></span>
                <?php else: ?>
                <span> Document manquant</span>
                <?php endif; ?>

            </div>
            <?php $date=date("Y-m-d");
            if ($date<=$date_limite_inscription){?>
            <div class="InputBox"></br>
                <!-- <button><a href="../modifiercandidature/modifiercandidature.php">Modifier Candidature</a></button> -->


                <button  class="consbout" Onclick="modifverif()">Modifier Candidature</button>
                <button  class="consbout" Onclick="confirmation()">Supprimer Candidature</button>
               <button class="consbout" > <a id="retourlink" style="text-decoration:none" href="../accueil/accueil.php?couleur=<?php if (isset($_GET['couleur']))echo $_GET['couleur']?>">Retour sur la page d accueil</a> </button>
            </div>
            <?php } ?>



</form>
</div>
<?php endforeach; ?>

<script type="text/javascript" src="consultercandidature.js"></script>
<script>


 function openPDF1() {
    var url = "<?php echo $clg['document_naissance']; ?>";
    window.open(url, "_blank");
}
function openPDF2() {
    var url = "<?php echo $clg['document_nationalite']; ?>";
    window.open(url, "_blank");
}
function openPDF3() {
    var url = "<?php echo $clg['document_attestation_bac']; ?>";
    window.open(url, "_blank");
}
<?php $up='../modifiercandidature/modifiercandidature.php?couleur='.$_GET['couleur']; ?>
function modifverif(){

    window.open("../modifiercandidature/modifiercandidature.php?couleur=<?php echo $_GET['couleur'];?>");

    }


</script>

</body>
</html>
