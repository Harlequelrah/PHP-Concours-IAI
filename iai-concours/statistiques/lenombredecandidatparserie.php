
<?php include_once('../../supplement/variables.php');


$selectserie=$mybase->prepare("SELECT DISTINCT serie from candidats");
$selectserie->execute();
$serie=$selectserie->fetchAll();



foreach($serie as $s){

    $nbr=$mybase->prepare("SELECT count(id_candidat) as nbr FROM candidats where serie=:serie");
    $nbr->execute(['serie'=>$s['serie']]);
    $nbr_result=$nbr->fetchAll();
    $serie_par_nbr[$s['serie']]=$nbr_result[0][0];

}

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


     <th>Serie</th>
     <th>nombre_total_inscrits</th>
        <?php foreach($serie_par_nbr as $key=>$value): ?>
        <tr>
            <td> <?php  echo $key; ?></td>
            <td> <?php  echo $value; ?></td>
        </tr>
        <?php endforeach; ?>
        <!-- ... autres lignes ... -->
    </table>
</div>
</body>
</html>
