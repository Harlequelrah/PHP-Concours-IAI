<?php
session_start();
include_once('../supplement/variables.php');
include_once('../supplement/functions.php');




$dates=['date_concours','date_limite_inscription'];
foreach($dates as $date){
    if(isset($_POST[$date])) {
        $insert=$mybase->prepare("UPDATE dates_concours SET $date=:$date");
        $insert->execute([$date=>$_POST[$date],]);
    }
}

header("Location: :../admin.php");
exit;
?>
