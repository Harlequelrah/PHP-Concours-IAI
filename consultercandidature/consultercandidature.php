<?php session_start();
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');
$id_etudiant=get_id_etudiant($etudiants,$_SESSION['LOGGED_USER']);
$request="SELECT * from candidats where id_etudiant=$id_etudiant";
$info_candidat=$mybase->prepare($request);
$info_candidat->execute();
$candidat_logged=$info_candidat->fetchAll();
if (isset($_GET['act']) && ($_GET['act']=='refresh'))
header("Location:consultercandidature.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="consultercandidature.css">
    <title>Consulter Sa Candidature</title>
</head>

<body>
    <div class="box">
        <span class="borderLine"></span>
        <form method="POST" action="" enctype="multipart/form-data">
        <p> Utilisateur :<a href="../supplement/logout.php"><?php echo $_SESSION['LOGGED_USER'] ;?></a></p>
            <h2>Consultation de votre candidature </h2>
            <div class="inputBox">
                <span>Nom</span >
                <span><?php echo $candidat_logged[0]['nom']; ?></span>
            </div>
             <div class="inputBox">
                <span> Prénoms</span>
                <span><?php echo $candidat_logged[0]['prenom']; ?></span>
            </div>
             <div class="inputBox">
                <span> photo</span>
                <?php $_SESSION['image']=($candidat_logged[0]['photo']);?>
                 <span><a href="telecharger.php" id="downloadLink">Télécharger l'image</a><span>



            </div>

            <div class="inputBox">

                <span>Date de naissance</span>
                <span><?php echo $candidat_logged[0]['date_naissance']; ?></span>

            </div>
            <div class="inputBox">

                <span>Nationnalité</span>
                <span><?php echo $candidat_logged[0]['nationalite']; ?></span>

            </div>
            <div class="inputBox">
                <span> Serie</span>
                <span><?php echo $candidat_logged[0]['serie']; ?></span>
            </div>
            <div class="inputBox">
                <span> Année Obtention Bac II</span>
                <span><?php echo $candidat_logged[0]['annee_bac']; ?></span>

            </div>

                <div class="inputBox">
                        <span>SEXE</span>
                        <span><?php echo $candidat_logged[0]['sexe']; ?></span>
           </div>

            <div class="inputBox">
                <span>Acte de naissance</span>
                <?php  if(isset($candidat_logged[0]['document_naissance'])):;?>
                <?php $_SESSION['pdf1']=($candidat_logged[0]['document_naissance']);?>
                 <span><a href="telecharger.php?action=1" id="downloadLink">Télécharger doc1</a><span>
                <?php else: ?>
                 <span> Document manquant</span>
                 <?php endif; ?>
            </div>
            <div class="inputBox">
                <span>Copie de la Nationnalité</span>
                <?php  if(isset($candidat_logged[0]['document_nationalite'])):;?>
                <?php $_SESSION['pdf2']=($candidat_logged[0]['document_nationalite']);?>
                <span><a href="telecharger.php?action=2" id="downloadLink">Télécharger doc2</a><span>
                <?php else: ?>
                <span> Document manquant</span>
                <?php endif; ?>

            </div>
            <div class="inputBox">
                <span>Attestation du  BAC II</span>
                <?php  if(isset($candidat_logged[0]['document_attestation_bac'])):;?>
                 <?php $_SESSION['pdf3']=($candidat_logged[0]['document_attestation_bac']);?>
                <span><a href="telecharger.php?action=3" id="downloadLink">Télécharger doc3</a><span>
                <?php else: ?>
                <span> Document manquant</span>
                <?php endif; ?>

            </div>
            <?php $date=date("Y-m-d");
            if ($date<=$date_limite_inscription){?>
            <div class="InputBox"></br>
                 <a href="../modifiercandidature/modifiercandidature.php"><button>Modifier Candidature</button></a>
                 <button Onclick="confirmation()">Supprimer Candidature</button>
            </div>
            <?php } ?>



</form>
</div>
<?php if(nbr_inscription_par_etudiant($id_etudiant,$nbr_ipe) >=2) :?>
<div class="box">
        <span class="borderLine"></span>
        <form method="POST" action="" enctype="multipart/form-data">
        <p> Utilisateur :<a href="../supplement/logout.php"><?php echo $_SESSION['LOGGED_USER'] ;?></a></p>
            <h2>Consultation de votre candidature </h2>
            <div class="inputBox">
                <span>Nom</span >
                <span><?php echo $candidat_logged[1]['nom']; ?></span>
            </div>
             <div class="inputBox">
                <span> Prénoms</span>
                <span><?php echo $candidat_logged[1]['prenom']; ?></span>
            </div>
             <div class="inputBox">
                <span> photo</span>
                <?php $_SESSION['image']=($candidat_logged[1]['photo']);?>
                 <span><a href="telecharger.php" id="downloadLink">Télécharger l'image</a><span>



            </div>

            <div class="inputBox">

                <span>Date de naissance</span>
                <span><?php echo $candidat_logged[1]['date_naissance']; ?></span>

            </div>
            <div class="inputBox">

                <span>Nationnalité</span>
                <span><?php echo $candidat_logged[1]['nationalite']; ?></span>

            </div>
            <div class="inputBox">
                <span> Serie</span>
                <span><?php echo $candidat_logged[1]['serie']; ?></span>
            </div>
            <div class="inputBox">
                <span> Année Obtention Bac II</span>
                <span><?php echo $candidat_logged[1]['annee_bac']; ?></span>

            </div>

                <div class="inputBox">
                        <span>SEXE</span>
                        <span><?php echo $candidat_logged[1]['sexe']; ?></span>
           </div>

            <div class="inputBox">
                <span>Acte de naissance</span>
                <?php  if(isset($candidat_logged[0]['document_naissance'])):;?>
                <?php $_SESSION['pdf1']=($candidat_logged[1]['document_naissance']);?>
                 <span><a href="telecharger.php?action=1" id="downloadLink">Télécharger doc1</a><span>
                <?php else: ?>
                 <span> Document manquant</span>
                 <?php endif; ?>
            </div>
            <div class="inputBox">
                <span>Copie de la Nationnalité</span>
                <?php  if(isset($candidat_logged[1]['document_nationalite'])):;?>
                <?php $_SESSION['pdf2']=($candidat_logged[1]['document_nationalite']);?>
                <span><a href="telecharger.php?action=2" id="downloadLink">Télécharger doc2</a><span>
                <?php else: ?>
                <span> Document manquant</span>
                <?php endif; ?>

            </div>
            <div class="inputBox">
                <span>Attestation du  BAC II</span>
                <?php  if(isset($candidat_logged[1]['document_attestation_bac'])):;?>
                 <?php $_SESSION['pdf3']=($candidat_logged[1]['document_attestation_bac']);?>
                <span><a href="telecharger.php?action=3" id="downloadLink">Télécharger doc3</a><span>
                <?php else: ?>
                <span> Document manquant</span>
                <?php endif; ?>

            </div>
            <?php $date=date("Y-m-d");
            if ($date<=$date_limite_inscription){?>
            <div class="InputBox"></br>
                 <a href="../modifiercandidature/modifiercandidature.php"><button>Modifier Candidature</button></a>
                 <button Onclick="confirmation()">Supprimer Candidature</button>
            </div>
            <?php } ?>



</form>
</div>
<?php endif; ?>
<script>
    function confirmation(){
        if (confirm("Etes vous sur de vouloir supprimer votre candidature?")){
            window.open("../modifiercandidature/supprimercandidature.php",'_self');
        }

    }
</script>1

</body>
</html>
