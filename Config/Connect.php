<?php
//Database configuration
    $dbHost     = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName     = "database_BTLHQTCSDL";

    // Create database connection
    $conn =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);//tương đương sql_connect

    // Check connection
    if (!$conn) {//truy cập thuộc tính phương thức của 1 đối tượng trong php
        die("Connection failed: " .mysqli_connect_error());
    }
?>
