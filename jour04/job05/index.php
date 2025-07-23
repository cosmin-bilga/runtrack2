<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 04 - Job 05</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Username</label><br />
        <input type="text" id="username" name="username" value=<?php if (array_key_exists("username", $_POST)) {  // Pour ne pas retaper username si echec de connexion
                                                                    echo htmlentities($_POST["username"]);
                                                                } ?>><br />
        <label for="password">Password</label><br />
        <input type="password" id="password" name="password"><br />
        <input type="submit">
    </form>

    <?php
    if (!array_key_exists("username", $_POST) or empty($_POST["username"]))  // Verification des champs username et password - existe et pas vide
        echo "Username field is empty!";
    elseif (!array_key_exists("password", $_POST) or empty($_POST["password"]))
        echo "Password field is empty!";
    elseif ($_POST['username'] == "John" and $_POST['password'] == "Rambo")
        echo "C'est pas ma guerre!";
    else
        echo "Votre pire cauchemar!";


    ?>
</body>

</html>