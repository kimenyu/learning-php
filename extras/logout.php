<?php
    session_start();

    session_destroy();
    header("Location: ../i3_sssions.php");