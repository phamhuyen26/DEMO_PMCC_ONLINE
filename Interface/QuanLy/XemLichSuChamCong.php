<?php
    session_start();
  if(!isset($_SESSION['isLoginOK'])){
      header("location:./login.php");
  }
  $manv=$_SESSION['isLoginOK'];
  // echo $manv;
  require_once "../../Config/Connect.php";
//   $sql="SELECT * from nhanvien where MaNV='$manv' and ChucVu=N'Quản lí'";
//   $result = mysqli_query($conn,$sql);
//   if(mysqli_num_rows($result)<=0){
//     header("location:../../index.php");
//   }
  // $row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALARY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body >
    <!-- Navbar -->
    <a href="/Demo_HQTCSDL/" class="m-5 p-3 bg-primary fs-4" style="color:white">Back Home</a>
    <div class="text-center mt-5 mx-5">
        <h2>LỊCH SỬ CHẤM CÔNG</h2>
        <p class="">
            <?php
                    // echo $_GET['error'];
                ?>
        </p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã nhân viên</th>
                    <th>Mã Phòng Ban</th>
                    <th>Họ Tên</th>
                    <th>Chức Vụ</th>
                    <th>Ngày</th>
                    <th>Thời gian checkin</th>
                    <th>Thời gian checkout</th>
                    <th>Số giờ làm</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                //Bước 1: kết nối database server
               
                //bước 2:thực hiện truy vấn
                $sql="select * from view_lichsuchamcong order by Ngay";
                $result=mysqli_query($conn,$sql);
                //Bước 3: Xử lý kết quả truy vấn
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                ?>
                        <tr>
                            <td ><?php echo $row["MaNV"]; ?></th>
                            <td><?php echo $row["MaPhongBan"]; ?></td>
                            <td><?php echo $row["HoTen"]; ?></td>
                            <td><?php echo $row["ChucVu"]; ?></td>
                            <td><?php echo $row["Ngay"]; ?></td>
                            <td><?php echo $row["ThoiGianCheckIn"]; ?></td>
                            <td><?php echo $row["ThoiGianCheckOut"]; ?></td>
                            <td><?php echo $row["SoGioLam"]; ?></td>
                        </tr>
                <?php
                    }
                }
            ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>