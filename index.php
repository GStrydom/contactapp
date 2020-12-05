<?php
    session_start();

    if($_SESSION['loggedIn'] == true) {
        $linkText = "Login";
        $linkUrl = "includes/login.php";
    } else {
        $linkText = "Logout";
        $linkUrl = "includes/logout.php";
    }

    require('includes/header.php');

    require('includes/footer.php');
?>

    <div class="head-bar">
        <h1>Contact App</h1>
        <a href=""><?php echo $linkText; ?></a>
    </div>