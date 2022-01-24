<?php
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header('location: login.php');
    }
    $ma_nhanvien = $_GET['manv'];
    $conn = mysqli_connect('localhost', 'root', '12345678', 'database_baitaplonchamcong');
    if (!$conn) {
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE from nhanvien where MaNV = '$ma_nhanvien'";
    echo $sql;
    $number = mysqli_query($conn, $sql);
    if($number>0){
        header ('location:admin.php');
    }
    else{
        echo "xoá thất bại";
    }
?>
