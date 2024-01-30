<?php //session_start() ;
//include_once('../supplement/variables.php');
?>

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
        <li><a class="aheader" alt="ACCUEIL" href="../accueil/accueil.php">ACCUEIL</a></li>
        <!-- <li style="visibility:hidden;"><a class="aheader" alt="ADMINISTRATION" href="#">ADMINISTRATION</a></li> -->








        <?php if (!isset($_SESSION['LOGGED_USER']))
        {
          echo "<li><a class='aheader' href='../CreateAccount/CreateAccount.php'>S' INSCRIRE</a></li>";
          echo "<li ><a class='aheader' href='../connexion/Connexion.php'>SE CONNECTER</a></li>" ;
          echo "<li style='visibility:hidden'><a class=aheder href='#'>POSTULER AU CONCOURS</a></li>";
          echo "<li style='visibility:hidden'><a class=aheder href='#'>CONSULTER CANDIDATURE</a></li>";

        }

        else{
          if(!iscandidat($candidats,$etudiants,$_SESSION['LOGGED_USER'])){
            echo "<li ><a class='aheader' href='../InscriptionConcours/InscriptionConcours.php'>POSTULER AU CONCOURS</a></li>";}
         else {
          echo " <li><a class='aheader' href='../consultercandidature/consultercandidature.php'>CONSULTER CANDIDATURE</a></li>" ;
          if (!has_complete_inscription($candidats,$etudiants,$_SESSION['LOGGED_USER'],$candidats_inscription_en_cours)){
            echo " <li><a class='aheader' href='../modifiercandidature/modifiercandidature.php?statut=en_cours'>COMPLETER SA CANDIDATURE</a></li>";
          }
        }
          echo '<li><a class=aheader href=#>'.date('d/m/Y').'</a></li>';
          //echo "<li id=time><a style='visibility:hidden' class='aheader' href='../connexion/Connexion.php'>SE CONNECTER</a></li>";
          echo  '<li id=timezoner><a class=aheader id= timezone></a></li>';

        } ?>



      </ul>
      <button id="switch" title="Changer le thème "><?php include('SVG.html') ?></button>
      <!-- <button id="switchtheme" alt=''> -->

      <!-- </button> -->
      <!-- <button id="switch" ><img src="../images/changertheme.jpg" id="switchtheme" title="changer le thème"/></button> -->
      <form id="searchForm">
      <input type="search" id="searchInput" placeholder="Rechercher" pattern=".*\S.*" title="Veuillez entrer du texte">
      <button id="searchSubmit" type="submit">Rechercher</button>
     </form>
     <!-- <a href="../supplement/logout.php" id="LOGOUT" >
     <?php //if (isset($_SESSION['LOGGED_USER']))echo $_SESSION['LOGGED_USER'];

     ?>
     </a> -->

     <a href="../supplement/logout.php" id="LOGOUT"><?php if (isset($_SESSION['LOGGED_USER']))echo 'Utilisateur:'.$_SESSION['LOGGED_USER']; ?></a>

    </nav>







