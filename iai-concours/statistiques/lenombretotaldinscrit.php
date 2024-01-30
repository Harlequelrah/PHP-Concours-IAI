<?php include_once('../../supplement/variables.php');
$select=$mybase->prepare("SELECT  COUNT(*) AS nombre_total_inscrits from candidats");
$select->execute();
$cnbr=$select->fetchAll();
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


        <th>
          Nombre Total de Candidats Inscrits
        </th>
        <tr>
            <td><?php echo $cnbr[0]['nombre_total_inscrits'] ;?></td>

        </tr>

    </table>
</div>
</body>
</html>
