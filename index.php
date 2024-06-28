<?php
require_once __DIR__ . '/functions.php';
require __DIR__ . '/usersdb.php';
session_start();

$_SESSION["username"] = "";

var_dump($_SESSION);;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainpage</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="./login.php">
                        Login
                    </a>
                </li>
                <li>
                    <a href="./main.php">
                        Main
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>