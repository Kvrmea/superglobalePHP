<?php
// echo 'Salut ' . htmlspecialchars($_GET["first_name"]) . '!';
session_start(); // Démarrer la session

// Déterminer le nom à afficher
if (isset($_GET["first_name"]) && !empty($_GET["first_name"])) {
    $name = htmlspecialchars($_GET["first_name"]);
} elseif (isset($_SESSION["first_name"]) && !empty($_SESSION["first_name"])) {
    // Récupération du prénom stocké en session
    $name = $_SESSION["first_name"];
} elseif (isset($_POST["first_name"]) && !empty($_POST["first_name"])) {
    // Stocker en session
    $_SESSION["first_name"] = htmlspecialchars($_POST["first_name"]);
    $name = $_SESSION["first_name"];
} else {
    $name = "anonyme";
}

echo "Salut " . $name . "!";
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <p>Votre nom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
</form>

<!-- Vérification de GET : Si first_name est dans l’URL, on l'affiche.
Sinon, vérification de POST : Si first_name est envoyé via le formulaire, on l'affiche.
Si aucun nom n'est fourni, on affiche "anonyme".
Le formulaire utilise $_SERVER["PHP_SELF"] pour éviter les erreurs si le fichier est renommé. -->