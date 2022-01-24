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
    } // MaNV = '$manv', MaPhongBan = '$mapb', 
    //$sql = "Update Nhanvien set HoTen = '$hoten', GioiTinh = '$gioitinh', NgaySinh = '$ngaysinh', DiaChi = '$diachi',Email='$email',SDT='$sdt',ChucVu='$chucvu' where MaNV = '$manv' and MaPhongBan ='$mapb'";
    echo $sql;
    $sql = "UPDATE `Nhanvien` SET `HoTen`= '$hoten',`GioiTinh`= '$gioitinh',`NgaySinh`= '$ngaysinh',`DiaChi`= '$diachi',`Email`= '$email',`SDT`= '$sdt',`ChucVu`= '$chucvu' WHERE MaNV = '$manv' and MaPhongBan ='$mapb'";
    echo $sql;
    if(mysqli_query($conn, $sql)){
        $_SESSION = $manv;
        header ('location:admin.php');

    }
    else{
        echo "cap nhat khong thanh cong";
    }
?>