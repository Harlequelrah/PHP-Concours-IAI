<?php  ;
// include_once('../supplement/variables.php');
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



    <?php
         $date1 = new DateTime();
         $date2 =new DateTime($date_limite_inscription);
         $interval = $date1->diff($date2);
    ?>




        <?php if (!isset($_SESSION['LOGGED_USER']))
        {
          echo "<li><a id='createaccountlink' class='aheader' href='../CreateAccount/CreateAccount.php?couleur=1'>S' INSCRIRE</a></li>";
          echo "<li ><a id='connexionlink' class='aheader' href='../connexion/Connexion.php?couleur=1'>SE CONNECTER</a></li>" ;
          echo "<li style='visibility:hidden'><a class=aheder href='#'>POSTULER AU CONCOURS</a></li>";
          echo "<li style='visibility:hidden'><a class=aheder href='#'>CONSULTER CANDIDATURE</a></li>";

        }

        else{
          if(!iscandidat($candidats,$etudiants,$_SESSION['LOGGED_USER'])){
            echo "<li ><a class='aheader' id='inscription' href='../InscriptionConcours/InscriptionConcours.php?couleur=1'>POSTULER AU CONCOURS</a></li>";
            // $date1 =date('Y-m-d');

            echo "<span id='dateline'>Jours restants pour postuler : " . $interval->format('%a jours') . "</span>";

          }
         else {
          if (!isset($_GET['couleur'])) {echo " <li><a class='aheader'id='conslink' href='../consultercandidature/consultercandidature.php?couleur=1'>CONSULTER CANDIDATURE</a></li>" ;}
         else{ echo " <li><a class='aheader'id='conslink' href='../consultercandidature/consultercandidature.php?couleur=$_GET[couleur]'>CONSULTER CANDIDATURE</a></li>" ;}
          if (!has_complete_inscription($candidats,$etudiants,$_SESSION['LOGGED_USER'],$candidats_inscription_en_cours)){

            if (isset($_GET['couleur'])) {echo "<li><a id='modiflink' class='aheader' href='../modifiercandidature/modifiercandidature.php?statut=en_cours&couleur=1'>COMPLETER SA CANDIDATURE</a></li>";}
             else{ echo "<li><a id='modiflink' class='aheader' href='../modifiercandidature/modifiercandidature.php?statut=en_cours&couleur=1'>COMPLETER SA CANDIDATURE</a></li>";}
            echo "<span id='dateline'>Jours restants pour completer : " . $interval->format('%a jours') . "</span>";
          }
        }
          echo '<li><a class=aheader href=#>'.date('d/m/Y').'</a></li>';
          //echo "<li id=time><a style='visibility:hidden' class='aheader' href='../connexion/Connexion.php'>SE CONNECTER</a></li>";
          echo  '<li id=timezoner><a class=aheader id= timezone></a></li>';

        } ?>



      </ul>
      <button id="switch" title="Changer le thème "><?php include('../svg/SVG.html') ?></button>
      <!-- <button id="switchtheme" alt=''> -->

      <!-- </button> -->
      <!-- <button id="switch" ><img src="../images/changertheme.jpg" id="switchtheme" title="changer le thème"/></button> -->
      <form id="searchForm">
      <input type="search" id="searchInput" placeholder="Rechercher. . . . ." pattern=".*\S.*" title="Veuillez entrer du texte">
      <button id="searchSubmit" type="submit"><?php include('../svg/loupe.svg') ?></button>
     </form>
     <!-- <a href="../supplement/logout.php" id="LOGOUT" >
     <?php //if (isset($_SESSION['LOGGED_USER']))echo $_SESSION['LOGGED_USER'];

     ?>
     </a> -->

     <a href='../supplement/logout.php'id="LOGOUT"><?php if (isset($_SESSION['LOGGED_USER']))echo 'Utilisateur:'.$_SESSION['LOGGED_USER']; ?></a>

    </nav>







