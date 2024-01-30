function checkSpacesOnInput() {
    var passwordField = document.getElementById('password');
    if (passwordField.value.includes(' ')) {
        alert("Les espaces ne sont pas autorisés dans le mot de passe.");}

    passwordField.value = passwordField.value.replace(/\s/g, '');

}







$(document).ready(function () {
    $("form").on("submit", function (event) {
        // Vérifie si les deux champs de mot de passe correspondent
        if (!checkPasswordMatch() || !checkPasswordStrength()) {
            // Annule la soumission du formulaire si les mots de passe ne correspondent pas
            event.preventDefault();
        }
    });
});

function checkPasswordMatch() {
    var password = $("#password").val();
    var password2 = $("#password2").val();


    if (password !== password2) {
        alert("Les mots de passe ne correspondent pas.");
        return false;
    }

    return true;
}
function checkPasswordStrength() {
        var password = document.getElementById("password").value;

        // Vérifier la présence de chiffres et de caractères spéciaux
        var containsDigits = /\d/.test(password);
        var containsSpecialChars = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password);

        if (!(containsDigits && containsSpecialChars)) {
            alert("Les mots de passe doivent contenir au moins 1 caractere special et un chiffre.");
            return false;
        } else {

          return true;

        }
    }
