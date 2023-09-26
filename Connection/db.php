<?php
include "CRUD/delete.php";

$server = getenv("containers-us-west-65.railway.app:6045");
$user = getenv("root");
$password = getenv("Xs55P1B1HsdP9qwfq3Mc");
$db = getenv("railway");

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    die("Connection faild");
} else {
    #insert();
    delete();
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
    $name = null;
    $name = null;
}
