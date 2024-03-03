
<?php include_once('../../supplement/variables.php');
$select=$mybase->prepare("SELECT id_candidat,nom,prenom,document_nationalite,'photo','document_naissance','document_attestation_bac' from candidats");
$select->execute();
$select_key=['id_candidat','nom','prenom','document_nationalite','photo','document_naissance','document_attestation_bac'];
$candidats_ins=$select->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="tableau.css">

</head>
<body>
<div class="center-table">
    <table>

        <!-- Contenu de votre tableau ici -->
        <?php foreach ($select_key as $key) echo "<th>$key</th>" ?>
        <?php foreach($candidats_ins as $cand): ?>
        <tr>
            <?php  foreach($select_key as $key)
                    if (in_array($key,['photo','document_naissance','document_nationalite','document_attestation_bac']))
                        echo  "<td><a href='../$cand[$key]'>$key]</a></td>";
                    else
                    echo "<td>$cand[$key]</td>";  ?>
        </tr>
        <?php endforeach; ?>
        <!-- ... autres lignes ... -->
    </table>
</div>
</body>
</html>
