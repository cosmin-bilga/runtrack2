<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03</title>
    <?php
    echo "<style>
        table, td, th
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
            </style>"
    ?>
</head>

<body>
    <?php
    $var1 = true;
    $var2 = 5;
    $var3 = "Chaine";
    $var4 = 3.14;
    echo "<table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Boolean</td>
                    <td>var1</td>
                    <td>$var1</td>
                </tr>
                <tr>
                    <td>Integer</td>
                    <td>var2</td>
                    <td>$var2</td>
                </tr>
                <tr>
                    <td>String</td>
                    <td>var3</td>
                    <td>$var3</td>
                </tr>
                <tr>
                    <td>Float</td>
                    <td>var4</td>
                    <td>$var4</td>
                </tr>
            </tbody>
        </table>";
    ?>
</body>

</html>