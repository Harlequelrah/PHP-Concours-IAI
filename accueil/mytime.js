// Déclarer la fonction mytime en dehors de $(document).ready
function mytime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    document.getElementById("timezone").innerHTML = h + "H" + m + "m" + s + "s";
    setInterval(mytime, 1000);
}

$(document).ready(function () {
    // Appeler la fonction mytime ici si nécessaire
    mytime();
});
