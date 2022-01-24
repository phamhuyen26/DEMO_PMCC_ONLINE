<?php
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:./login.php");
    }
    $manv=$_SESSION['isLoginOK'];

    $dbHost     = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName     = "database_BTLHQTCSDL";

    // Create database connection
    $conn =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);//tương đương sql_connect
    $sql="SELECT ChucVu from nhanvien where MaNV='".$_SESSION['isLoginOK']."'";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    if($row['ChucVu']!="Quản lý"){
      header("Location: /Demo_HQTCSDL/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="main container">
  <form action="/Demo_HTChamCong/Process/process-ThemCongViec.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mã nhân viên nhận công việc</label>
                    <input type="text" name="txtIDNV" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mã dự án</label>
                    <input type="text" name="txtIDDuAn" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Ngày</label>
                    <input type="date" name="txtNgay" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Trạng thái</label>
                    <input type="text" name="txtTrangThai" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
                    <textarea class="form-control" name="txtNoiDung" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
  </div>
</body>
</html>