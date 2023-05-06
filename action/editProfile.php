<?php

include('connect.php');

$todo = $_POST['todo'];
if ($todo=='editProfile'){

    $id = $_POST["id"];
    $username = $_POST["username"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $status = $_POST["status"];
    $biographie = $_POST["bio"];
    $resume = $_FILES['resume']['name'];
    $tmp_name_resume = $_FILES['resume']['tmp_name'];
    $photo = $_FILES['photo']['name'];
    $tmp_name_photo = $_FILES['photo']['tmp_name'];
    $facebook = $_POST["facebook"];
    $linkedin = $_POST["linkedin"];
    $instagram = $_POST["instagram"];
    $twitter = $_POST["twitter"];
    $phone = $_POST["phone"];
    $adresse = $_POST["adresse"];
    $pColor = $_POST["pColor"];
    $sColor = $_POST["sColor"];
    $aColor = $_POST["aColor"];

    if (!empty($photo)){
        $timestamp = "photo_".time().".jpg";
        move_uploaded_file($tmp_name_photo,"../uploads/profiles/$timestamp");
        $conn->query("update `users` set photo='$timestamp'");
    }
    if (!empty($resume)){
        $timestamp = "photo_".time().".pdf";
        move_uploaded_file($tmp_name_resume,"../uploads/resumes/$timestamp");
        $conn->query("update `users` set resume='$timestamp'");
    }

    $sql = "UPDATE `users` SET `nom`='$nom',`prenom`='$prenom',`email`='$email',`username`='$username',`password`='$password',`status`='$status',`biographie`='$biographie',`facebook`='$facebook',`linkedin`='$linkedin',`instagram`='$instagram',`twitter`='$twitter',`phone`='$phone',`primaryColor`='$pColor',`secondaryColor`='$sColor',`additionalColor`='$aColor',`adresse`='$adresse' WHERE id='$id'" ;
    $conn->query($sql);

    echo '
            <script>
                window.location = "../partitions/dashboard/index.php";
            </script>
        ';

}
else 
{
    $id=$_POST['id'];
    $sql="SELECT * FROM users WHERE id='$id' "; 
    $result = $conn->query($sql);
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $photo = $row['photo'];
        }
    } 
    unlink("../uploads/profiles/$photo");
    $sql = "UPDATE `users` SET photo=''";
    $conn->query($sql);
    echo '
        <script>
            window.location = "../partitions/dashboard/index.php";
        </script>
    '; 
}

?>