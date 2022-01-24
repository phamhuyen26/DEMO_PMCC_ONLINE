<?php
    include("template/header.php");
?>
    <main>
        <div class="container">
        <form class="form-signin" action="process-login.php" method="post" name="login" onsubmit="return validateForm()">
            
            <h1 class="h3 mb-3 font-weight-normal">Đăng nhập</h1>
            <label for="inputEmail" class="sr-only">Tên đăng nhập</label>
            <input type="text" id="inputUser" name="manv" class="form-control" placeholder="Tên đăng nhập">
            <label for="" id="errorinputuser"></label><br>
            <label for="inputPassword" class="sr-only">Mật khẩu</label>
            <input type="password" id="inputPassword" name="matkhau" class="form-control" placeholder="Mật khẩu">
            <label for="" id="errorinputpassword"></label>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                <?php
                    if(isset($_GET['error'])){
                        echo "<p style='color: red'>{$_GET['error']}</p>";
                    }
                ?>
            </div>
            <div class="text-center">
                    <div>
                        <p>Bạn chưa có tài khoản? <a href="signup.php" class="text-decoration-none">Đăng ký tại đây!</a></p>
                    </div>
                </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSignIn" >Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
        </div>    
    </main>
    <script src="js/script.js"></script>
<?php
    include("template/footer.php");
?>