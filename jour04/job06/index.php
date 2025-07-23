<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 06</title>
</head>

<body>
    <form action="index.php" method="get">
        <label for="nombre">Nombre</label><br />
        <input type="text" id="nombre" name="nombre">
        <input type="submit">
    </form>
    <?php
    if (array_key_exists("nombre", $_GET)) {
        if (empty($_GET["nombre"]))
            echo "Champ \"Nombre\" vide.";
        elseif (ctype_digit($_GET["nombre"])) {
            if (intval($_GET["nombre"]) % 2 == 0)
                echo "Nombre est pair!";
            else
                echo "Nombre est impair!";
        } else
            echo "Le texte envoyé n'est pas un nombre entier valide.";
    }
    ?>
</body>

</html>