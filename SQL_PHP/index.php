<?php
    include("template/header.php");
?>
    <main>
        <div class="container">
            <h3 class="text-center mt-5">Danh sách nhân viên</h3>
            <div class="col-md-12 mb-3">
                <a href="./admin.php"><button class="btn btn-primary">Xem chi tiết</button></a>
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

                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này kết nối -->
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '12345678','database_baitaplonchamcong');
                    if (!$conn) {
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    $sql = "SELECT * from Nhanvien";
                    //   echo $sql;
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
                                
                            </tr>
                    <?php
                        }
                    
                    }
                    else 
                    echo "Lỗi kết nối";
                    ?>
                </tbody>
            </table>
        </div>
    </main>
<?php
    include("template/footer.php");
?>
