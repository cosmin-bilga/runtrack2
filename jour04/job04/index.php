<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 04</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 5px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
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

    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_POST as $key => $value) {
                if (!empty($value))
                    echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>