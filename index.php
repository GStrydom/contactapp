<?php
    session_start();

    if($_SESSION['loggedIn'] == true) {
        $linkText = "Logout";
        $linkUrl = "includes/logout.php";
    } else {
        $linkText = "Login";
        $linkUrl = "includes/login.php";
    }

    $rows = [];

    require('includes/header.php');
?>
    <div class="head-bar">
        <h1>Contact App</h1>
        <a href=""><?php echo $linkText; ?></a>
    </div>

    <div class="content">
        <table>
            <tr>
                <th>Name</th>
                <th></th>
                <th></th>
            </tr>
            <?php
                foreach($rows as $row) {
                    echo "<tr><td>$row->name</td><td>Edit</td><td>Delete</td></tr>";
                }
            ?>
        </table>
    </div>

    <?php require('includes/footer.php'); ?>

