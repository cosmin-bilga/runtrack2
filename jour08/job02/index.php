<?php
if (isset($_POST["reset"])) {
    $_COOKIE["nbvisites"] = 1;
    setcookie("nbvisites", 1);
} elseif (isset($_COOKIE["nbvisites"])) {
    setcookie("nbvisites", $_COOKIE["nbvisites"] + 1);
    $_COOKIE["nbvisites"] += 1;
} else {
    setcookie("nbvisites", 1);
    $_COOKIE["nbvisites"] = 1;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job 02</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="submit" name="reset" value="reset">
    </form>
    <p> Nombre de visites: <?php echo $_COOKIE["nbvisites"]; ?> </p>

</body>

</html>