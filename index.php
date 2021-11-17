<?php

    session_start();

    if(isset($_POST["submit"])) {
        $_SESSION["user"] = [
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        ];
        header("location: session.php");
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
    <form action="index.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <p>
                <?php 
                    if (isset($_SESSION["erreur"]["user"])) {
                        echo $_SESSION["erreur"]["user"];
                    }
                ?>
            </p>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <p>
                <?php 
                    if (isset($_SESSION["erreur"]["password"])) {
                        echo $_SESSION["erreur"]["password"];
                    }
                ?>
            </p>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>