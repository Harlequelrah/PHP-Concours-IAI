function confirmation(){
    if (confirm("Etes vous sur de vouloir supprimer votre candidature?")){

        window.open("../modifiercandidature/supprimercandidature.php",'_self');
    }

}
function modifverif(){
    if (confirm("Etes vous sur de vouloir modifier votre candidature?")){
        window.open("../modifiercandidature/modifiercandidature.php",'_blank');




    }
}
function openPDF(url) {
    window.open(url, "_blank");
}

