
<?php include_once('../../supplement/variables.php');
// $select=$mybase->prepare("SELECT id_candidat ,nom,prenom from candidats where (select count(id_etudiant) from candidats  as c where c.id_candidat=candidats.id_candidat) >=2");
$select = $mybase->prepare("
    SELECT id_etudiant,id_candidat, nom, prenom
    FROM candidats
    WHERE (
        SELECT COUNT(id_etudiant)
        FROM candidats as c
        WHERE c.id_etudiant = candidats.id_etudiant
    ) >= 2
");

$select->execute();
$select_key=['id_etudiant','id_candidat','nom','prenom'];
$candidats_ins=$select->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tableau.css">

</head>
<body>
<div class="center-table">
    <table>

        <!-- Contenu de votre tableau ici -->
        <?php foreach ($select_key as $key) echo "<th>$key</th>" ?>
        <?php foreach($candidats_ins as $cand): ?>
        <tr>
            <?php  foreach($select_key as $key) echo "<td>$cand[$key]</td>"; ?>
        </tr>
        <?php endforeach; ?>
        <!-- ... autres lignes ... -->
    </table>
</div>
</body>
</html>
