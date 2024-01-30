<?php session_start(); ?>
<?php
if(!isset($_GET['action'])){
    // Supposons que $image contient l'image en binaire
$image = $_SESSION['image'] ;// Remplacez ceci par votre propre méthode pour obtenir l'image binaire

// Assurez-vous que l'image a été correctement lue
if ($image === false) {
    die('Impossible de lire l\'image.');
}

// Envoyer les en-têtes appropriés pour indiquer un téléchargement d'image
header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename="photo.jpg"');
header('Content-Length: ' . strlen($image)); // Ajoutez cette ligne pour spécifier la longueur du contenu

// Sortir le contenu de l'image binaire
echo $image;
}
else{
    $pdfContent=$_SESSION['pdf'.$_GET['action']];
    if ($pdfContent === false) {
        die('Impossible de lire le fichier PDF.');
    }
    $filename="document$_GET[action].pdf";
    // Envoyer les en-têtes appropriés pour indiquer un téléchargement de fichier PDF
    header('Content-Type: application/pdf');
    header("Content-Disposition: attachment; filename=$filename");
    header('Content-Length: ' . strlen($pdfContent)); // Ajoutez cette ligne pour spécifier la longueur du contenu

    // Sortir le contenu du fichier PDF
    echo $pdfContent;
}


header("Location:consultercandidature.php");
exit;
?>
