<?php


session_start();

if (!isset($_SESSION["email"]) ){
    header("Location: login.php");
    exit;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beljar</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>mama</h1>
</body>

</html>