<?php
if (isset($_POST["prenom"]) and !empty($_POST["prenom"])) {
    setcookie("prenom", $_POST["prenom"]);
    $_COOKIE["prenom"] = $_POST["prenom"];
}
if (isset($_POST["deco"])) {
    setcookie("prenom", "", time() - 1000);
    unset($_COOKIE["prenom"]);
}
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job 04</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["prenom"])) {
        echo "<p>Bonjour <b>" . $_COOKIE["prenom"] . "</b>!</p>";
    ?>
        <form action="index.php" method="post">
            <input type="submit" value="Déconnexion" name="deco">
        </form>
    <?php
    } else {
    ?>
        <form action="index.php" method="post">
            <label for="prenom">Votre prenom:</label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit" name="connexion" value="connexion">
        </form>
    <?php
    }
    ?>
</body>

</html>