<?php
    session_start();
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $db = "chat";
    // Create Connection
    $conn = mysqli_connect($serverName, $userName, $password, $db);
    ?>