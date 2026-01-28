<?php
//var_dump($_SERVER["REQUEST_METHOD"]);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    if(empty($username) || empty($pwd) || empty($email)){
        exit();
        header("Location: ../index.html");
    }

    echo "username: " . htmlspecialchars($username) . "<br>";
    echo "pwd: " . htmlspecialchars($pwd) . "<br>";
    echo "email: " . htmlspecialchars($email) . "<br>";
    header("Location: ../index.html");
} else {
    header("Location: ../index.html");
}

