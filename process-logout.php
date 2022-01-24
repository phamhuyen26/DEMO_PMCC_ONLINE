<?php
    session_start();
    if(isset($_SESSION['isLoginOK'])) { 
        unset($_SESSION['isLoginOK']);
        header('Location: login.php');   //Đi ra
    }
?>