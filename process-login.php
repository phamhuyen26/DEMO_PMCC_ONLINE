<?php
    session_start();
    if (isset($_POST["btnSignIn"])) {
        $user = $_POST['manv'];
        $pass = $_POST['matkhau'];
        require_once "./Config/Connect.php";
        $sql = "select * FROM TaiKhoan WHERE MaNV = '$user'  and MatKhau = '$pass'";

    
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
            //cấp thẻ làm việc
            $_SESSION['isLoginOK'] = $user;
            header("location:index.php");//chuyển hướng về trang quản trị
        }else{
            $error = "Sai tên tài khoản hoặc mất khẩu";
            header("location: login.php?error=$error");//chuyển hướng hiển thị
        }
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
    
?>
