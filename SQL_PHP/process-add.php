<?php
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header('location: login.php');
    }
    $conn = mysqli_connect('localhost', 'root', '12345678', 'database_baitaplonchamcong');
    if (!$conn) {
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    if (isset($_POST["btnsave"])) {
        $manv = $_POST["manv"];
        $mapb = $_POST["mapb"];
        $hoten = $_POST["hoten"];
        $gioitinh = $_POST["gioitinh"];
        $ngaysinh = $_POST["ngaysinh"];
        $diachi = $_POST["diachi"];
        $email = $_POST["email"];
        $sdt = $_POST["sdt"];
        $chucvu= $_POST["chucvu"];
    }
    $sql = " INSERT into nhanvien (MaNV,MaPhongBan,Hoten,GioiTinh,NgaySinh,DiaChi,Email,SDT,ChucVu) Values ('$manv','$mapb','$hoten','$gioitinh','$ngaysinh','$diachi','$email','$sdt','$chucvu')";
    echo $sql;

    if(mysqli_query($conn, $sql)){
        header ('location:admin.php');
    }
    else{
       echo "Them khong thanh cong";
    }
?>