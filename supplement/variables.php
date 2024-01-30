<?php
try{
    $mybase= new PDO('mysql:host=localhost;dbname=iai-concours;charset=utf8', 'root', 'root',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}
catch(Exception $e){
    die('Erreur:'.$e->getMessage());
}


$a=$mybase->prepare('SELECT * FROM administrateurs');
$a->execute();
$administrateurs=$a->fetchAll();

$b=$mybase->prepare('SELECT * FROM etudiants');
$b->execute();
$etudiants=$b->fetchAll();


$c=$mybase->prepare('SELECT * FROM candidats');
$c->execute();
$candidats=$c->fetchAll();

$d=$mybase->prepare("SELECT * FROM dates_concours");
$d->execute();
$date=$d->fetchAll();
$date_limite_inscription=$date[0]['date_limite_inscription'];
$date_concours=$date[0]['date_concours'];


$select=$mybase->prepare("SELECT id_etudiant from candidats WHERE document_naissance IS NULL OR document_nationalite IS NULL OR document_attestation_bac IS NULL");
$select->execute();
$candidats_inscription_en_cours=$select->fetchAll();
// foreach($candidats_inscription_en_cours as $c) echo $c['id_etudiant'];

$request20=$mybase->prepare("SELECT id_etudiant ,count(id_candidat) as nombre from candidats group by id_etudiant");
$request20->execute();
$nbr_ipe=$request20->fetchAll();
    # code...

$request21=$mybase->prepare("SELECT email , message from message ");
$request21->execute();
$messages=$request21->fetchAll();
// foreach($administrateurs as $admin){
//     echo "<h1>$admin[id_administrateur]</h1>";
//     echo "<h2>$admin[username_admin]</h2>";
//     echo  $admin['password_admin'];

// }

?>
