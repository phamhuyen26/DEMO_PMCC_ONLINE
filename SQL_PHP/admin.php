<?php
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header('location: login.php');
    }
    include("template/header.php");
?>
<div class="container">
    <h3 class="text-center mt-5">DANH BẠ ĐIỆN THOẠI CÁN BỘ/GIẢNG VIÊN ĐẠI HỌC THỦY LỢI</h3>
    <div>
        <a href="./addemployee.php"><button class="btn btn-primary">Thêm</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Mã nhân viên</th>
                <th scope="col">Mã phòng ban</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Chức vụ</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <!-- Vùng này kết nối -->
            <?php
            $conn = mysqli_connect('localhost', 'root', '12345678','database_baitaplonchamcong');
            if (!$conn) {
                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
            }
            $sql = "Select * from Nhanvien";
            $result =  mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                    <th scope="row"><?php echo $row['MaNV']; ?></th>
                                <td><?php echo $row['MaPhongBan']; ?></td>
                                <td><?php echo $row['HoTen']; ?></td>
                                <td><?php echo $row['GioiTinh']; ?></td>
                                <td><?php echo $row['NgaySinh']; ?></td>
                                <td><?php echo $row['DiaChi']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['SDT']; ?></td>
                                <td><?php echo $row['ChucVu']; ?></td>
                                
                        <td><a href="editemployee.php?manv=<?php echo $row['MaNV']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="deleteemployee.php?manv=<?php echo $row['MaNV']; ?>"><i class="bi bi-trash"></i></a></td>
                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>
</div>
<?php
    include("template/footer.php");
?>