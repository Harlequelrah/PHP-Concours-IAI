<?php session_start();
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');?>
<?php if(!isset($_SESSION['LOGGED_ADMIN'])){
    header("Location:adminconnexion.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="admin2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../navbars-offcanvas/navbars-offcanvas.css">

    <title>Document</title>
</head>
<body style='background-color:#1d1d1d;'>
<nav>
    <nav id="ok" class="navbar navbar-dark bg-dark" aria-label="Dark offcanvas navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">IAI-TOGO Institut Africain D'Informatique</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">les statistiques des candidatures</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin.php">Administration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" onclick="updateaffichage('statistiques/listedescandidatsinscritsauconcours.php')" target="affichage">liste des candidats inscrits au concours</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('statistiques/listedescandidatsinscritsauconcoursparsexe.php')"
                target="affichage">La liste des candidats inscrits au concours par sexe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('statistiques/lalistedescandidatsparnationalite.php')"
                target="affichage">Liste des candidats par nationalite</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('statistiques/listedescandidatsayantomisduploaderundocument.php')"
                target="affichage">Liste des candidats ayant omis d’uploader un document</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('statistiques/listedescandidatsinscritsdoublementauconcours.php')"
                target="affichage">Liste des candidats inscrits doublement au concours</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('statistiques/lenombretotaldinscrit.php')"
                target="affichage">Le nombre total d'inscrit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('statistiques/lenombredecandidatparnationalite.php')"
                target="affichage">Le nombre de candidat par nationalité</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('statistiques/lenombredecandidatparserie.php')"
                target="affichage">Le nombre de candidat par serie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('statistiques/lenombredecandidatparsexe.php')"
                target="affichage">Le nombre de candidat par sexe</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <nav class="navbar">
        <div class="logo">
             <img src="..\images\logoiai.jpeg" class="logoiaiheader" alt="logoiai"/>
             <a class="aheader" href="#">
                 <h3 class="logo_titleheader">
                   IAI-TOGO
                   L’institut Africain d’Informatique
                </h3>
             </a>
        </div>
       <ul>

        <li class="aheader"><a href="#"><?php echo "Date du concours : ".$date_concours ; ?> </a></li>
        <li class="aheader"><a href="#"><?php echo "Date limite pour l 'inscription : ".$date_limite_inscription ; ?></a></li>
        <li class="aheader"><a href="formulairedesdates/formulairedesdates.php">Formulaire de Modification des dates</a></li>
        <li class="aheader" id="admin"><a href="logout.php"><?php echo "Administrateur : ".$_SESSION['LOGGED_ADMIN']; ?></a></li>
        <li ><a class="aheader" href="message.php" id="message"><?php echo "Message des utilisateurs"; ?></a></li>



       </ul>

    </nav>
    <div id='imagecontainer'>
      <iframe src="infopage.html" frameborder="0" id="affichage" name="affichage">
      </iframe>
    </div>

    <!-- <div class="iframeContainer">
      <iframe src="liens.html" name="liens" id="liens"></iframe>
      <iframe src="affichage.php" name="affichage" id="affichage"></iframe>
    </div> -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script>function updateaffichage(contentUrl) {
    document.getElementById('affichage').src = contentUrl;
}</script>
</body>
</html>
