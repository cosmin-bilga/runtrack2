<?php session_start();
if (!isset($_SESSION["prenoms"]) or isset($_POST["reset"]))
    $_SESSION["prenoms"] = [];


if (isset($_POST["prenom"]) and !empty($_POST["prenom"]))
    array_push($_SESSION["prenoms"], $_POST["prenom"]);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job 03</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="prenom">Ajoute un prenom</label>
        <input type="text" name="prenom" id="prenom">
        <input type="submit" name="reset" id="reset" value="reset">
        <input type="submit">
        <p>Liste de prenoms:</p>
        <ul>
            <?php

            if (!empty($_SESSION["prenoms"]))
                foreach ($_SESSION["prenoms"] as $prenom)
                    echo "<li>$prenom</li>";
            ?>
        </ul>
    </form>
</body>

</html>