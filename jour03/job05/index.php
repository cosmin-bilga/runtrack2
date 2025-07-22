<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 03 - Job 04</title>
    <style>
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 2px;
        }
    </style>
</head>

<body>
    <?php
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
    $dic = array("consonnes" => 0, "voyelles" => 0);
    $voyelles = array('a', 'e', 'i', 'o', 'u', 'y');

    for ($i = 0; $i < strlen($str); $i += 1) {
        if (in_array(strtolower($str[$i]), $voyelles))
            $dic["voyelles"] += 1;
        elseif (ctype_alpha($str[$i]))
            $dic["consonnes"] += 1;
    }

    echo "<table style=\"border: 1px solid black;border-collapse:collapse;\">
        <thead >
            <tr>
                <th>Consonnes</th>
                <th>Voyelles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>" . $dic["consonnes"] . "</td>
                <td>" . $dic["voyelles"] . "</td>
            </tr>
        </tbody>
    </table>"
    ?>

</body>

</html>