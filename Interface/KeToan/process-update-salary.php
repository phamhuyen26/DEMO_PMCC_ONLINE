<?php
    //login.php  truyền dữ liệu sang: nhận dữ liệu từ login.php  gửi sang
 // Tạo session: Măc định mỗi phiên làm việc có thời hạn 24 phút
    // session_start();
    // if(!isset($_SESSION['isLoginOK'])) { //Nếu không có thẻ
    //     header('Location: /Demo_HQTCSDL/login.php');   //Đi ra
    // }
if(isset($_POST['btnupdate'])){ 
    $manv=$_POST['manv'];
    $thang=$_POST['month'];
    $LuongMotNgay=$_POST['LuongMotNgay'];
    $SoNgayLam=$_POST['SoNgayLam'];
    $Thue=$_POST['Thue'];
    //ở đây còn phải ktra người dùng có nhập không
  require "../../Config/Connect.php";
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE luong SET Thang='$thang',LuongMotNgay='$LuongMotNgay',SoNgayLam='$SoNgayLam',Thue='$Thue' 
    where MaNV='$manv' and YEAR(Thang)=YEAR('$thang') and  MONTH(Thang)=MONTH('$thang')";   
    $result = mysqli_query($conn,$sql);
    if($result==true){
        header("location:./CapNhatLuong.php");
    } else {
        $error="Không thể kết nối đến database!";
        header("location:./CapNhatLuong.php?error=$error"); 
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}

else {
    header("location:./CheckIn.php");
}

   
?>