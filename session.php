<?php 
    session_start();
    $username = "Alex";
    $password = "1234";

    if($_SESSION["user"]["username"] == $username && $_SESSION["user"]["password"] == $password) {
        echo "Bienvenue $username <br>";
    } elseif ($_SESSION["user"]["username"] != $username) {
        $_SESSION["erreur"] = ["user" => "Nom d'utilisateur incorrect"];
        header("location: index.php");
    } elseif ($_SESSION["user"]["password"] != $password) {
        $_SESSION["erreur"] = ["password" => "Mot de passe incorrect"];
        header("location: index.php");
    }

    $userChoice = $_POST["choice"];
    $computerChoice = [
        "rock",
        "paper",
        "scissors"
    ];
    shuffle($computerChoice);
    $CPU = $computerChoice[0];

    if(isset($_POST["submit"])){
        if($userChoice === $CPU){
            echo "Tie <br>";
        } elseif($userChoice === "rock") {
            if($CPU === "scissors"){
                echo "User wins <br>";
            } else{
                echo "Computer wins <br>";
            }
        } elseif($userChoice === "paper"){
            if($CPU === "rock"){
                echo "User wins <br>";
            } else{
                echo "Computer wins <br>";
            }
        } elseif($userChoice === "scissors") {
            if($CPU === "paper"){
                echo "User wins <br>";
            } else {
                echo "Computer wins <br>";
            }
        }
        echo "You've chosen: $userChoice <br>";
        echo "Computer has chosen: $CPU <br>";
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
    <form action="./session.php" method="POST">
        <select name="choice" id="choice">
            <option value="">---Choose an option---</option>
            <option value="rock">Rock</option>
            <option value="paper">Paper</option>
            <option value="scissors">Scissors</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>

    <a name="logout" href="./deconnexion.php">LogOut</a>
</body>
</html>

