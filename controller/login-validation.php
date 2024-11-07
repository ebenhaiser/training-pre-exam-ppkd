<?php
    if (empty($_SESSION['id'])) {
        header('Location: controller/action-logout.php');
    }
?>