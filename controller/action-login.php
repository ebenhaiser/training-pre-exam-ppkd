<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $loginQuery = mysqli_query($connection, "SELECT * FROM users WHERE email= '$email'");
        $loginRow = mysqli_fetch_array($loginQuery);
        if($password == $loginRow['password']) {
            $_SESSION['id'] = $loginRow['id'];
            header('location: ../index.php');
        } else {
            echo "KONNNTOLLLLLLLL";
        }
    }
?>