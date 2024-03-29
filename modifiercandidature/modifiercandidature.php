<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modifiercandidature.css">
    <title>Formulaire d'inscription</title>
    <script language="javascript" src="../assets/dist/js/jquery.js" >
    // <script language="javascript" src="https://code.jquery.com/jquery-3.7.1.js"> </script>
</head>
<body>
    <div class="box">
        <span class="borderLine"></span>
        <form method="POST" action="submitmodif.php" enctype="multipart/form-data">
        <p> Utilisateur :<a href="../supplement/logout.php"><?php echo $_SESSION['LOGGED_USER'] ;?></a></p>
        <?php if (isset($_GET['statut']) && $_GET['statut']=='en_cours') : ?>
            <?php if (isset($_GET['couleur']))  $col='../accueil/accueil.php?couleur='.$_GET['couleur']?>
            <span align="center"><a href="<?php echo $col ?>">Retour</a> </span>
            <h2>Formulaire de Completion de l inscription</h2>


        <?php else : ?>
            <h2>Formulaire de Modification de l inscription</h2>


            <p>Entrer uniquement les champs que vous souhaitez modifier</p>
            <div class="inputBox">
                <input type="text" name="nom" >
                <span>Nom</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="prenom" >
                <span> Prénoms</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="file" id="pdfile1" name="photo" accept="image/*" >
                <span>Insérer photo</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="date"  name="date_naissance">
                <span>Date de naissance</span>
                <i></i>
            </div>
            <div  class="nat" >
                <span>Nationnalité</span>
                <!-- <input type="text" name="nat" required> -->
                <select name="nat">
                    <option value="algerienne">Algérienne</option>
                    <option value="angolaise">Angolaise</option>
                    <option value="beninoise">Béninoise</option>
                    <option value="botswanaise">Botswanaise</option>
                    <option value="burkinabenne">Burkinabènne</option>
                    <option value="burundaise">Burundaise</option>
                    <option value="camerounaise">Camerounaise</option>
                    <option value="cape_verdeanne">Cap-verdienne</option>
                    <option value="centrafricaine">Centrafricaine</option>
                    <option value="comorienne">Comorienne</option>
                    <option value="congolaise">Congolaise</option>
                    <option value="djiboutienne">Djiboutienne</option>
                    <option value="égyptienne">Égyptienne</option>
                    <option value="érythréenne">Érythréenne</option>
                    <option value="éthiopienne">Éthiopienne</option>
                    <option value="gabonaise">Gabonaise</option>
                    <option value="gambienne">Gambienne</option>
                    <option value="ghanéenne">Ghanéenne</option>
                    <option value="guinéenne">Guinéenne</option>
                    <option value="guinéenne_equatoriale">Guinéenne équatoriale</option>
                    <option value="ivoirienne">Ivoirienne</option>
                    <option value="kenyane">Kenyane</option>
                    <option value="lesothienne">Lesothienne</option>
                    <option value="libérienne">Libérienne</option>
                    <option value="libyenne">Libyenne</option>
                    <option value="malawienne">Malawienne</option>
                    <option value="malienne">Maliennne</option>
                    <option value="marocaine">Marocaine</option>
                    <option value="mauritanienne">Mauritanienne</option>
                    <option value="mauricienne">Mauricienne</option>
                    <option value="mozambicaine">Mozambicaine</option>
                    <option value="namibienne">Namibienne</option>
                    <option value="nigériane">Nigériane</option>
                    <option value="ougandaise">Ougandaise</option>
                    <option value="rwandaise">Rwandaise</option>
                    <option value="santoméenne">Santoméenne</option>
                    <option value="sénégalaise">Sénégalaise</option>
                    <option value="seychelloise">Seychelloise</option>
                    <option value="sierra_leonaise">Sierra-Léonaise</option>
                    <option value="somalienne">Somalienne</option>
                    <option value="soudanaise">Soudanaise</option>
                    <option value="sud-africaine">Sud-africaine</option>
                    <option value="sud-soudanaise">Sud-soudanaise</option>
                    <option value="swazilandaise">Swazilandaise</option>
                    <option value="tanzanienne">Tanzanienne</option>
                    <option value="tchadienne">Tchadienne</option>
                    <option value="togolaise">Togolaise</option>
                    <option value="tunisienne">Tunisienne</option>
                    <option value="zambienne">Zambienne</option>
                    <option value="zimbabwéenne">Zimbabwéenne</option>
                   </select>

 <!-- <i></i> -->
            </div>
            <div class="inputBox" style="display:flex;">
                <p style="margin-right:100px"> Serie</p>

                <select name="serie" required>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F1">F1</option>
                    <option value="F2">F2</option>
                </select>
            </div>
            <div class="inputBox" style="display:flex;">
                <p style="margin-right:100px"> Serie</p>

                <select name="serie">
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F1">F1</option>
                    <option value="F2">F2</option>
                </select>
            </div>
            <div class="inputBox">
                <input type="number" min="2021" max="2023" name="annee_bac" >
                <span> Année Obtention Bac II</span>
                <i></i>
            </div>

                <div class="HumanSex">
                    <span class="sexe">
                        <span>SEXE</span>
                    </span>

                    <span class="mascu">
                        <span>M</span>
                        <input type="radio" name="sexe" value="M" >
                    </span>
                    <span class="femi">
                        <span>F</span>
                    <input type="radio" name="sexe" value="F">
                    </span>

                </div>
    <?php endif; ?>
    <link rel="stylesheet" href="../theme/couleur1.css">
    <?php  if (isset($_GET['couleur'])) :?>
     <link rel="stylesheet" href="<?php echo '../theme/couleur'.$_GET['couleur'].'.css';?>">
    <?php  endif ?>
            <div class="inputBox">
                <input type="file" id="pdfile2" name="document_naissance" accept=".pdf">
                <span>Acte de naissance</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="file" id="pdfile3" name="document_nationalite" accept=".pdf">
                <span>Copie de la Nationnalité</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="file" id="pdfile4" name="document_attestation_bac" accept=".pdf">
                <span>Attestation du  BAC II</span>
                <i></i>
            </div>
            <input type="submit" value="Soumettre" Onclick="notif()">

    </div>

</form>

<script>
    function notif(){
        window.alert("Votre candidature a bien été modifié");
    }



    <?php if (isset($_GET['statut']) && $_GET['statut']=='en_cours') : ?>

$(".box").css('height','500px');
    <?php endif; ?>
        // Fonction pour vérifier si le mot de passe contient des espaces


</script>
</body>
</html>
