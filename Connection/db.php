<?php

$server = "localhost:3306";
$user = "root";
$password = "";
$db = "Teste";

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    die("Connection faild");
} else {
    #insert();
}

function insert()
{

    global $conn;
    $name = trim(stripcslashes($_POST["name"]));
    $email = trim(stripslashes($_POST["email"]));

    if (isset($_POST["submit"])) {
        $query = "INSERT INTO user(name, email) VALUE('$name', '$email') ";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed.<br>" . mysqli_error($conn));
        }
    }
}


