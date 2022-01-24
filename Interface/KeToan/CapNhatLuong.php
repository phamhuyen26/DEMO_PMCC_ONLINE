<?php
    session_start();
  if(!isset($_SESSION['isLoginOK'])){
      header("location:./login.php");
  }
  $manv=$_SESSION['isLoginOK'];
  // echo $manv;
  require_once "../../Config/Connect.php";
  $sql="SELECT * from nhanvien where MaNV='$manv' and ChucVu=N'Kế Toán'";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)<=0){
    header("location:../../index.php");
  }
  // $row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Update Salary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      }
      h1 {
      margin: 0 0 20px;
      font-weight: 400;
      color: #1c87c9;
      }
      p {
      margin: 0 0 5px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      min-height: 100vh;
      background: #1c87c9;
      margin: 0 300px
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #f5f5f5; 
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      .fa-envelope {
      transform: rotate(-20deg);
      }
      .fa-at , .fa-mail-bulk{
      transform: rotate(10deg);
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    
      @media (min-width: 568px) {
      .main-block {
      flex-direction: row;
      }
      .left-part, form {
      width: 50%;
      }
      .fa-envelope {
      margin-top: 0;
      margin-left: 20%;
      }
      .fa-at {
      margin-top: -10%;
      margin-left: 65%;
      }
      .fa-mail-bulk {
      margin-top: 2%;
      margin-left: 28%;
      }
      }
    </style>
  </head>
  <body>
  <a href="/Demo_HQTCSDL/Interface/KeToan/CapNhatLuong.php" class="m-5 p-3 bg-primary fs-4" style="color:white">Back Table Salary</a>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-envelope"></i>
        <i class="fas fa-at"></i>
        <i class="fas fa-mail-bulk"></i>
      </div>
      <?php
      

        if(isset($_GET['id']) && isset($_GET['thang'])){
          $id=$_GET['id'];
          $thang=$_GET['thang'];
         
          //bước 2:thực hiện truy vấn
          $sql="SELECT * from luong where MaNV='$id' and Thang='$thang'";
          $result=mysqli_query($conn,$sql);
          //Bước 3: Xử lý kết quả truy vấn
          if(mysqli_num_rows($result)>0){
           $row=mysqli_fetch_assoc($result);
          ?>
      <form action="./process-update-salary.php" method="post">
        <h1 class="text-center">Update Salary</h1>
        <div class="info">
          <input class="fname" type="text" name="manv" id="MaNV" value='<?php echo $id ?>'>
          <input type="text" name="month" value='<?php echo $row['Thang'] ?>' id="month" >
          <input type="number " step="0.01" name="LuongMotNgay" value='<?php echo $row['LuongMotNgay'] ?>' name="LuongMotNgay" id="LuongMotNgay" placeholder="LuongMotNgay">
          <input type="number"  name="SoNgayLam" value='<?php echo $row['SoNgayLam'] ?>' id="SoNgayLam" placeholder="SoNgayLam">
          <input type="text" step="0.01" value='<?php echo $row['Thue'] ?>' name="Thue" id="Thue" placeholder="Thue">
          <p name="today">Ngày hiện tại: <?php echo date("Y-m-d h:i:s") ?></p>
        </div>
        <button type="submit" name="btnupdate" href="/">Update</button>
      </form>
      <?php
        }}
        else{
          header("location:./BangLuong.php");
        }
        ?>
          <?php
             if(isset($_GET['error']))
             {
               echo "<h5 style ='color:red;font-size:0.8rem;'> {$_GET['error']} </h5>";
             }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>


  
