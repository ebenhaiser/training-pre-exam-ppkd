<?php
    require_once 'connection.php';
    if(isset($_POST['register'])){
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $querySignIn = mysqli_query($connection, "INSERT INTO users (full_name, username, email, password) VALUES ('$full_name', '$username', '$email', '$password')");
        if ($querySignIn) {
            header('Location: ../login.php');
        } else {
            echo "GAGAL GOBLOKKKKKKK";
        }
    }
        
?>