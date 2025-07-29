<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 08 - Job 01</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="submit" name="reset" value="reset">
    </form>
    <?php
    if (isset($_POST["reset"]))
        $_SESSION["nbvisites"] = 0;

    if (isset($_SESSION["nbvisites"]))
        $_SESSION["nbvisites"] += 1;
    else
        $_SESSION["nbvisites"] = 1;
    ?>
    <p> Nombre de visites: <?php echo $_SESSION["nbvisites"]; ?> </p>

</body>

</html>