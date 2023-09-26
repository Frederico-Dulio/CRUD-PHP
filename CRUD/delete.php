<?php

function delete()
{
    global $conn;

    if (isset($_POST["del"])) {
        $email = trim(stripslashes($_POST["email"]));

        $query = "DELETE FROM user WHERE email = '$email' ";
        $res = mysqli_query($conn, $query);

        if (!$res) {
            die("Query error " . mysqli_error($conn));
        }

    }

}
