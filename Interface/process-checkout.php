<?php
    //login.php  truyền dữ liệu sang: nhận dữ liệu từ login.php  gửi sang
 // Tạo session: Măc định mỗi phiên làm việc có thời hạn 24 phút
     session_start();
     if(!isset($_SESSION['isLoginOK'])) { //Nếu không có thẻ
         header('Location: /Demo_HQTCSDL/login.php');   //Đi ra
     }
if(isset($_POST['btncheckout'])){ 
    $manv=$_POST['manv'];
    $time=$_POST['ngaycheckout'];
    //ở đây còn phải ktra người dùng có nhập không
  require "../Config/Connect.php";
    $ngay=date("Y-m-d");
    $now=date("h:i:s");
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT into checkout(MaNV,NgayCheckout,ThoiGianCheckout) values ('$manv','$ngay','$now')";   
    $result = mysqli_query($conn,$sql);
    if($result==true){
        header("location:./CheckOut.php");
    } else {
        $error="Bạn đã checkout!Không thể kết nối đến database!";
        header("location:./CheckOut.php?error=$error"); 
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}

else {
    header("location:./CheckOut.php");
}

   
?>