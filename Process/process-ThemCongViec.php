<?php
    session_start();
    if(isset($_POST['txtIDNV'])){
        $idCV = $_POST['txtIDNV'];
    }
    $idDA = $_POST['txtIDDuAn'];
    $ngay = $_POST['txtNgay'];
    $TrangThai = $_POST['txtTrangThai'];
    $NoiDung = $_POST['txtNoiDung'];

    $dbHost     = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName     = "database_baitaplonchamcong";

    // Create database connection
    $conn =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);//tương đương sql_connect

    $sql = "INSERT INTO nhiemvu values ('$idCV', '$idDA', '$ngay', '$TrangThai', '$NoiDung')";
    echo $sql;
    // Thực hiện truy vấn 
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: /Demo_HQTCSDL/index.php");
    }

?>