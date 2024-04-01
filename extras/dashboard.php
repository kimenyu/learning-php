<?php
    session_start();

    if (isset($_SESSION["username"])) {
        echo '<h1> Welcome ' . ''. $_SESSION['username'] .'</h1>';
        echo '<a href="./logout.php">Log out</a>';
    } else {
        echo '<h1> Welcome guest </h1>';
        echo '<a href="../i3_sssions.php">Home</a>';
    }