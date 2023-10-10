<?php
require("connection.php");

function registerUser($username, $password)
{
    global $con;
    $stmt = $con->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $stmt = $con->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $userAlreadyExists = $stmt->rowCount();
    if (!$userAlreadyExists) {
        registerUser($username, $password);
        header("Location: Website1.html");
        exit();
    } else {
        echo "Dieser Benutzer existiert bereits.";
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Website</title>
</head>
<body>
    <div class="container">
        <h1>REGISTRIERUNG</h1>
        <form method="post" action="index.php">
            <input type="text" name="username" placeholder="Benutzer">
            <input type="password" name="password" placeholder="Passwort">
            <button name="submit">Registrieren</button>
        </form>
    </div>
</body>
</html>