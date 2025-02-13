<?php
echo 'Salut ' . htmlspecialchars($_GET["first_name"]) . '!';

// Déterminer le nom à afficher
// if (isset($_GET["first_name"]) && !empty($_GET["first_name"])) {
//     $name = htmlspecialchars($_GET["first_name"]);
// } elseif (isset($_POST["first_name"]) && !empty($_POST["first_name"])) {
//     $name = htmlspecialchars($_POST["first_name"]);
// } else {
//     $name = "anonyme";
// }

// echo "Salut " . $name . "!";

?>

<!-- <form action="index.php" method="post">
    <p>Votre nom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
</form> -->