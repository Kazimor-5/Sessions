<?php 

    session_start();
    $username = "Alex";
    $password = "1234";
    // var_dump($_SESSION);
    // var_dump($_SESSION["user"]["username"]);
    if($_SESSION["user"]["username"] == $username && $_SESSION["user"]["password"] == $password) {
        echo "Bienvenue $username";
    }
    // Si je me trompe de mdp ou d'identifiant = redirection vers page d'accueil + pas d'affichage logout
    elseif ($_SESSION["user"]["username"] != $username) {
        $_SESSION["erreur"] = ["user" => "Nom d'utilisateur incorrect"];
        header("location: index.php");
    } elseif ($_SESSION["user"]["password"] != $password) {
        $_SESSION["erreur"] = ["password" => "Mot de passe incorrect"];
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a name="logout" href="./deconnexion.php">LogOut</a>
</body>
</html>

