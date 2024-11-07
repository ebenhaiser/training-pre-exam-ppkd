<?php
    require_once 'controller/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'inc/style.php' ?>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card mt-5 shadow">
                        <div class="card-header">
                            <h3 align="center">Register</h3>
                        </div>
                        <div class="card-body">
                            <form action="controller/action-signin.php" method="post">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group mt-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mt-3" name="register">Sign In</button>
                                </div>
                            </form>
                            <div align="center" class="mt-3">
                                <p>Already have an account? <a href="login.php" style="text-align: none;">Log In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'inc/script.php' ?>
</body>

</html>