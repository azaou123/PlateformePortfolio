<?php

include('connect.php');
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

// Get user from the database
$sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
$result = $conn->query($sql);
if ($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $vusername = $row['username'];
        $vpassword = $row['password'];
        $id = $row['id'];
    }
}

// Verify password
if($username==$vusername || $password==$vpassword) {
    // Set session variables

    $_SESSION["loggedIn"] = true;
    $_SESSION["user_id"] = $id;

    // Redirect to dashboard
    echo '
        <script>
            window.location = "../partitions/dashboard/index.php";
        </script>
    ';
  exit();
} 
else {
  // Display error message
  echo '
        <script>
            alert("Les données sont invalides !");
            window.location = "../";
        </script>
    ';
}


?>