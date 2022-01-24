<?php
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header('location: login.php');
    }
    include("template/header.php");
?>
<main>
    <div class="container">
        <?php
        $ma_nhanvien = $_GET['manv'];
        $conn = mysqli_connect('localhost', 'root', '12345678', 'database_baitaplonchamcong');
        if (!$conn) {
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        $sql = "Select * from Nhanvien where MaNV = '{$ma_nhanvien}'";
        $number = mysqli_query($conn, $sql);
        
        $result =  mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);
            $manv = $row['MaNV'];
            $mapb = $row['MaPhongBan'];
            $hoten = $row['HoTen'];
            $gioitinh = $row['GioiTinh'];
            $ngaysinh = $row['NgaySinh'];
            $diachi = $row['DiaChi'];
            $email = $row['Email'];
            $sdt = $row['SDT'];
            $chucvu= $row['ChucVu'];
        }
        ?>
        <h3 class="text-center mt-5 mb-5">Chỉnh sửa thông tin nhân viên</h3>
        <form class="row g-3 needs-validation" action="process-edit.php" method="post" novalidate>
        <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Mã Nhân viên</label>
                    <input type="text" class="form-control"  name="manv" value="<?php echo $manv ?>" required>
                    
                </div>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Mã Phòng Ban</label>
                    <input type="text" class="form-control"  name="mapb"value="<?php echo $mapb ?>" required>
                    
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Họ Tên</label>
                    <input type="text" class="form-control"  name="hoten" value="<?php echo $hoten ?>" required>
                   
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Giới Tính</label>
                    <input type="text" class="form-control" name="gioitinh"value="<?php echo $gioitinh ?>" required>
                   
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Ngày sinh</label>
                    <input type="date" class="form-control"   name="ngaysinh"value="<?php echo $ngaysinh ?>" required>
                    
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-l   abel">Địa chỉ</label>
                    <input type="text" class="form-control"name="diachi" value="<?php echo $diachi ?>"  required>
                    
                </div>
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">

                        <input type="email" class="form-control" name="email" value="<?php echo $email ?>"  required>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label">Số điện thoại</label>
                    <div class="input-group has-validation">

                        <input type="text" class="form-control"   name="sdt" value="<?php echo $sdt ?>" required>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label">Chức vụ</label>
                    <div class="input-group has-validation">

                        <input type="text" class="form-control"  name="chucvu" value="<?php echo $chucvu ?>"  required>
                        
                    </div>
                </div>
            
                <?php
                    $conn = mysqli_connect('localhost', 'root', '12345678', 'database_baitaplonchamcong');
                    if (!$conn) {
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                //     $sql = "Select MaNV from Nhanvien";
                //     echo $sql;
                //     $result = mysqli_query($conn, $sql);
                //     if(mysqli_num_rows($result)){
                //         while ($row = mysqli_fetch_assoc($result)) {
                //             if($row['MaNV'] == $manv){
                //                 echo '<option selected value="'.$row['MaNV'].'">'.$row['MaPhongBan'].'</option>';
                //             }else{
                //                 echo '<option value="'.$row['MaNV'].'">'.$row['MaPhongBan'].'</option>';
                //             }
                //     }
                // }
                ?>
                
 
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="btnsave">Submit form</button>
            </div>
        </form>
    </div>
</main>
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<?php
    include("template/footer.php");
?>
