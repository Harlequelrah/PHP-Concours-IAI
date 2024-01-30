<?php include('../supplement/variables.php');
include('../supplement/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="statistiques/tableau.css">
    <style>
        body{
            background-color: LightGray;
            /* background-color: #FFFFE0; */
        }
    </style>
</head>
<body>
<div class="center-table">
    <table>


     <th>email</th>
     <th>message</th>
        <?php foreach($messages as $sms): ?>
        <tr>
            <td> <?php  echo $sms['email']; ?></td>
            <td> <?php  echo $sms['message']; ?></td>
        </tr>
        <?php endforeach; ?>
        <!-- ... autres lignes ... -->
    </table>
    <button id="retouradmin" ><a href="../admin.php">Retour</a></button>
</div>
</body>
</html>
