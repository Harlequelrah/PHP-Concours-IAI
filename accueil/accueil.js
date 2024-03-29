function updateInfopage(contentUrl) {
    document.getElementById('infopage').src = contentUrl;
}

// Récupérer les éléments nécessaires du DOM
var searchInput = document.getElementById('searchInput');
var searchResults = document.getElementById('searchResults');


//getElementById("time").InnerHTML=today;

// Ajouter un gestionnaire d'événement pour le champ de recherche
searchInput.addEventListener('input', function () {
    var searchText = searchInput.value.toLowerCase();

    // Récupérer les éléments de la page
    var elements = searchResults.getElementsByTagName('p');

    // Parcourir les éléments et masquer ou afficher en fonction de la correspondance avec la recherche
    for (var i = 0; i < elements.length; i++) {
        var elementText = elements[i].textContent.toLowerCase();
        if (elementText.includes(searchText)) {
            elements[i].style.display = 'block';
        } else {
            elements[i].style.display = 'none';
        }
    }
});


$(document).ready(function() {
    // var cpt=$("#color").text();
    // cpt=parseInt(cpt)
    // alert("compteur actuel"+cpt);
    var cpt = 1;
    $('#switch').on('click', function() {
        $('#infopage').attr('src',"../infopage/infopage.html");
        var couleurs = ['../theme/couleur1.css', '../theme/couleur2.css', '../theme/couleur3.css', '../theme/couleur4.css'];
        $('#couleur').attr('href', couleurs[cpt % 4]);
        colors=['#1d1d1d','red','cyan','#fff'];
        $('#infopage').css('background-color',colors[cpt%4]);
        messagecouleurs=['../infopage/info.php?couleur=1','../infopage/info.php?couleur=2','../infopage/info.php?couleur=3','../infopage/info.php?couleur=4'];
        creation_compte=['../CreateAccount/CreateAccount.php?couleur=1','../CreateAccount/CreateAccount.php?couleur=2','../CreateAccount/CreateAccount.php?couleur=3','../CreateAccount/CreateAccount.php?couleur=4'];
        connexion_compte=['../connexion/Connexion.php?couleur=1','../connexion/Connexion.php?couleur=2','../connexion/Connexion.php?couleur=3','../connexion/Connexion.php?couleur=4']
        inscription=['../InscriptionConcours/InscriptionConcours.php?couleur=1','../InscriptionConcours/InscriptionConcours.php?couleur=2','../InscriptionConcours/InscriptionConcours.php?couleur=3','../InscriptionConcours/InscriptionConcours.php?couleur=4']
        consulter=['../consultercandidature/consultercandidature.php?couleur=1','../consultercandidature/consultercandidature.php?couleur=2','../consultercandidature/consultercandidature.php?couleur=3','../consultercandidature/consultercandidature.php?couleur=4']
       modif=['../modifiercandidature/modifiercandidature.php?statut=en_cours&couleur=1','../modifiercandidature/modifiercandidature.php?statut=en_cours&couleur=2','../modifiercandidature/modifiercandidature.php?statut=en_cours&couleur=3','../modifiercandidature/modifiercandidature.php?statut=en_cours&couleur=4']
        $('#info').attr('src',messagecouleurs[cpt % 4]);
        $('#createaccountlink').attr('href',creation_compte[cpt % 4]);
        $('#connexionlink').attr('href',connexion_compte[cpt % 4]);
        $('#inscription').attr('href',inscription[cpt % 4]);
        $('#conslink').attr('href',consulter[cpt % 4]);
        $('#modiflink').attr('href',modif[cpt % 4]);


        cpt += 1;
    })
        // cpt=cpt+""
        // $("#color").text(cpt);
        // alert("compteur apres"+
})
