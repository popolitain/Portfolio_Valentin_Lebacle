function formSubmitted() {
    // Empêcher la soumission du formulaire
    event.preventDefault();

    // Faire apparaître le message de succès
    document.getElementById("success-message").style.display = "block";

    // Attendre 3 secondes
    setTimeout(function () {
        // Faire disparaître le message de succès
        document.getElementById("success-message").style.display = "none";
    }, 3000);
}