<?php
    session_start();
  if(!isset($_SESSION['isLoginOK'])){
      header("location:./login.php");
  }
  $manv=$_SESSION['isLoginOK'];
  // echo $manv;


?>

<html>
  <head>
    <title>CheckIn Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/Style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      html, body {
      /* display: flex; */
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      background:#f1f1f1;
      }
      form {
          margin-top:100px ;
        background:white;
      border: 5px solid #f1f1f1;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      height: 60%;
      margin: 10% 30%;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
        display: block;
        float: none;
        }
    }
    </style>
</head>
  <body >
  <a href="/Demo_HQTCSDL/" class="m-5 p-3 bg-primary fs-4" style="color:white">Back Home</a>
    <form action="./process-checkin.php" method="post">
      <h1>CHECKIN FORM</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="MaVN"><strong>MaVN</strong></label>
        <!-- t??? l???y msv -->
        <input type="text" value='<?php echo $manv ?>' name="manv" required>
        <!-- t??? l???y ng??y -->
        
        <label for="psw"><strong>Ngay ChecIn</strong></label> <br></br>
       
        <input type="text" class="p-3" id="ngaycheckin" value='<?php echo date("Y-m-d h:i:s") ?>' name="ngaycheckin" required >
      </div>
      <?php
             if(isset($_GET['error']))
             {
               echo "<h5 style ='color:red;font-size:0.8rem;'> {$_GET['error']} </h5>";
             }
      ?>
      <button type="submit" name="btncheckin" onclick="return checkin()">START</button>
    </form>
    <?php
             if(!isset($_GET['error']))
             {?>
                <script>   
                function checkin(){
                    alert("CheckIn th??nh c??ng! ?????ng h??? s??? b???t ?????u t??nh gi???!");
                }
              </script>
             <?php
             }
      ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>











