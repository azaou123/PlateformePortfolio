<?php

include('connect.php');

$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

if ($password != $cpassword){
    echo '
        <script>
            alert("Passwords Do Not Match !");
            window.location = "../partitions/register.php";
        </script>
    ';
}
else{
    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $query);
    if ($query){
        echo '
            <script>
                alert("Inscription Avec Succès !");
                window.location = "../";
            </script>
        ';
    }
}

// Hash the password
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the database


?>