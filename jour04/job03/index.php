<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 03</title>
</head>

<body>

    <form action="index.php" method="post">
        <label for="nom">Nom</label><br />
        <input type="text" name="nom" id="nom"><br />
        <label for="prenom">Prenom</label><br />
        <input type="text" name="prenom" id="prenom"><br />
        <label for="age">Age</label><br />
        <input type="text" name="age" id="age"><br />
        <label for="addresse">Addresse</label><br />
        <input type="text" name="addresse" id="addresse"><br />
        <label for="telephone">Telephone</label><br />
        <input type="text" name="telephone" id="telephone"><br />
        <input type="submit">
    </form>

    <?php

    $count = 0;
    foreach ($_POST as $key => $value) {
        if (!empty($_POST[$key]))
            $count += 1;
    }

    echo "Le nombre d'arguments POST envoyé est: " . $count;
    ?>

</body>

</html>