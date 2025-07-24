<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 06 - Job 05</title>
    <?php
    #print_r($_GET);
    if (array_key_exists("style", $_GET))
        echo "<link rel=\"stylesheet\" href=\"" . $_GET["style"] . ".css\"> ";
    ?>
</head>

<body>

    <form action="index.php" method="get">
        <label for="selection-style">Choisis le style de la page:</label>

        <select name="style" id="selection-style">
            <option value="">--Choissisez une option--</option>
            <option value="style1">Style1</option>
            <option value="style2">Style2</option>
            <option value="style3">Style3</option>

        </select>
        <input type="submit">
    </form>

</body>

</html>