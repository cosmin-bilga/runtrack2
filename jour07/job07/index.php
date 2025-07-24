<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 07 - Job 07</title>
    <style>
        p {
            padding: 5px;
        }
    </style>

</head>

<body>

    <form action="index.php" method="post">
        <label for="str">String a modifier</label><br />
        <input type="text" id="str" name="string"><br />
        <label for="style">Selectionnez un style</label><br />
        <select id="style" name="fonction">
            <option value="">-- Choissisez un style --</option>
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select><br />
        <input type="submit">
    </form>

    <p>
        <?php

        //print_r($_POST);

        function gras(string $str): string
        {
            $str = explode(" ", $str);
            for ($i = 0; $i < count($str); $i += 1) {
                if (strlen($str[$i]) > 0 and ctype_upper($str[$i][0]))
                    $str[$i] = "<b>" . $str[$i] . "</b>";
            }

            return implode(" ", $str);
        }

        function cesar(string $str, int $decalage): string
        {
            for ($i = 0; $i < strlen($str); $i += 1) {
                if (ord($str[$i]) >= 65 and ord($str[$i]) <= 90)
                    $str[$i] =  chr((ord($str[$i]) - 65 + $decalage) % 26 + 65);
                if (ord($str[$i]) >= 97 and ord($str[$i]) <= 122)
                    $str[$i] =  chr((ord($str[$i]) - 97 + $decalage) % 26 + 97);
            }

            return $str;
        }

        function plateforme(string $str): string
        {
            $str = explode(" ", $str);
            for ($i = 0; $i < count($str); $i += 1) {
                if (substr($str[$i], -2) === "me")
                    //if ($str[$i][-2] === "m" and $str[$i][-1] == "e")
                    $str[$i] = $str[$i] . "_";
            }

            return implode(" ", $str);
        }

        if (isset($_POST["fonction"]) and isset($_POST["string"])) {
            switch ($_POST["fonction"]) {
                case "gras":
                    echo gras($_POST["string"]);
                    break;
                case "cesar":
                    echo cesar($_POST["string"], 2);
                    break;
                case "plateforme":
                    echo plateforme($_POST["string"]);
                    break;
                default:
                    echo $_POST["string"];
                    break;
            }
        }


        ?>
    </p>

</body>

</html>