<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 10 - Job 12</title>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
        }
    </style>
</head>

<body>



    <?php

    $mysqli = new mysqli("localhost", "root", "", "jour09", 3307);
    $mysqli->set_charset("utf8");
    $result = $mysqli->query("SELECT prenom,nom,naissance FROM etudiants WHERE YEAR(naissance)>=1998 AND YEAR(naissance)<=2018;");



    ?>
    <table>
        <thead>
            <tr>
                <?php
                $row = $result->fetch_assoc();
                foreach ($row as $key => $value)
                    echo "<th>" . ucfirst($key) . "</th>";
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row) {
                echo "<tr>";
                foreach ($row as $cell)
                    echo "<td>$cell</td>";
                echo "</tr>";
                $row = $result->fetch_assoc();
                //print_r($row);
            }
            ?>
        </tbody>
    </table>
</body>

</html>