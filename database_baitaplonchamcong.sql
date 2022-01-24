-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 04:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_baitaplonchamcong`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `chamcong`
-- (See below for the actual view)
--
CREATE TABLE `chamcong` (
`MaNV` char(10)
,`Ngay` date
,`ThoiGianCheckIn` time
,`ThoiGianCheckOut` time
);

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `MaNV` char(10) NOT NULL,
  `NgayCheckin` date NOT NULL,
  `ThoiGianCheckIn` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`MaNV`, `NgayCheckin`, `ThoiGianCheckIn`) VALUES
('NV01', '2022-01-20', '02:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `MaNV` char(10) NOT NULL,
  `NgayCheckout` date NOT NULL,
  `ThoiGianCheckout` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`MaNV`, `NgayCheckout`, `ThoiGianCheckout`) VALUES
('NV01', '2022-01-20', '02:49:39');

-- --------------------------------------------------------

--
-- Stand-in structure for view `congviec`
-- (See below for the actual view)
--
CREATE TABLE `congviec` (
`MaNV` char(10)
,`MaDuAn` char(10)
,`Ngay` date
,`TenDuAn` varchar(500)
,`TienDo` varchar(200)
,`NgayNhan` date
,`HanBanGiao` date
,`TrangThai` varchar(200)
,`NhiemVuCV` varchar(1000)
);

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `MaDuAn` char(10) NOT NULL,
  `TenDuAn` varchar(500) DEFAULT NULL,
  `TienDo` varchar(200) DEFAULT NULL,
  `NgayNhan` date DEFAULT NULL,
  `HanBanGiao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`MaDuAn`, `TenDuAn`, `TienDo`, `NgayNhan`, `HanBanGiao`) VALUES
('DA01', 'Dự án nền tảng mua bán trực tuyến Shippe', 'Mới nhận', '2022-01-18', '2022-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `luong`
--

CREATE TABLE `luong` (
  `MaNV` char(10) NOT NULL,
  `Thang` date NOT NULL,
  `LuongMotNgay` float DEFAULT NULL,
  `SoNgayLam` float DEFAULT NULL,
  `Thue` float DEFAULT NULL,
  `TongLuong` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` char(10) NOT NULL,
  `MaPhongBan` char(10) DEFAULT NULL,
  `HoTen` varchar(30) NOT NULL,
  `GioiTinh` varchar(5) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL CHECK (`Email` like '%@%'),
  `SDT` char(10) DEFAULT NULL,
  `ChucVu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `MaPhongBan`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`, `SDT`, `ChucVu`) VALUES
('NV01', 'PB01', 'Nguyễn Ngọc Bình', 'Nam', '2002-01-06', 'Hà Nội', 'binhnguyen29122001@gmail.com', '0888646464', 'Nhân viên'),
('NV02', 'PB01', 'Phạm Thị Huyền', 'Nữ', '2002-05-07', 'Nam Định', 'huyenpham123@gmail.com', '0123452221', 'Quản lý');

-- --------------------------------------------------------

--
-- Table structure for table `nhiemvu`
--

CREATE TABLE `nhiemvu` (
  `MaNV` char(10) NOT NULL,
  `MaDuAn` char(10) DEFAULT NULL,
  `Ngay` date NOT NULL,
  `TrangThai` varchar(200) NOT NULL,
  `NhiemVuCV` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhiemvu`
--

INSERT INTO `nhiemvu` (`MaNV`, `MaDuAn`, `Ngay`, `TrangThai`, `NhiemVuCV`) VALUES
('NV01', 'DA01', '2022-01-20', 'Chưa hoàn thành', 'Xây dựng giao diện cho nền tảng web');

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MaPhongBan` char(10) NOT NULL,
  `TenPhongBan` char(50) NOT NULL,
  `SoNhanVien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MaPhongBan`, `TenPhongBan`, `SoNhanVien`) VALUES
('PB01', 'Phòng 01', 10);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaNV` char(10) NOT NULL,
  `MatKhau` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaNV`, `MatKhau`) VALUES
('NV01', '123456789'),
('NV02', '123456789');

-- --------------------------------------------------------

--
-- Structure for view `chamcong`
--
DROP TABLE IF EXISTS `chamcong`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chamcong`  AS SELECT `checkin`.`MaNV` AS `MaNV`, `checkin`.`NgayCheckin` AS `Ngay`, `checkin`.`ThoiGianCheckIn` AS `ThoiGianCheckIn`, `checkout`.`ThoiGianCheckout` AS `ThoiGianCheckOut` FROM (`checkin` join `checkout`) WHERE `checkin`.`NgayCheckin` = `checkout`.`NgayCheckout` ;

-- --------------------------------------------------------

--
-- Structure for view `congviec`
--
DROP TABLE IF EXISTS `congviec`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `congviec`  AS SELECT `nhiemvu`.`MaNV` AS `MaNV`, `duan`.`MaDuAn` AS `MaDuAn`, `nhiemvu`.`Ngay` AS `Ngay`, `duan`.`TenDuAn` AS `TenDuAn`, `duan`.`TienDo` AS `TienDo`, `duan`.`NgayNhan` AS `NgayNhan`, `duan`.`HanBanGiao` AS `HanBanGiao`, `nhiemvu`.`TrangThai` AS `TrangThai`, `nhiemvu`.`NhiemVuCV` AS `NhiemVuCV` FROM (`nhiemvu` join `duan`) WHERE `nhiemvu`.`MaDuAn` = `duan`.`MaDuAn` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`MaNV`,`NgayCheckin`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`MaNV`,`NgayCheckout`);

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`MaDuAn`);

--
-- Indexes for table `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`MaNV`,`Thang`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `MaPhongBan` (`MaPhongBan`);

--
-- Indexes for table `nhiemvu`
--
ALTER TABLE `nhiemvu`
  ADD PRIMARY KEY (`MaNV`,`Ngay`),
  ADD KEY `MaDuAn` (`MaDuAn`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPhongBan`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaNV`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkin`
--
ALTER TABLE `checkin`
  ADD CONSTRAINT `checkin_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `luong`
--
ALTER TABLE `luong`
  ADD CONSTRAINT `luong_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaPhongBan`) REFERENCES `phongban` (`MaPhongBan`);

--
-- Constraints for table `nhiemvu`
--
ALTER TABLE `nhiemvu`
  ADD CONSTRAINT `nhiemvu_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `nhiemvu_ibfk_2` FOREIGN KEY (`MaDuAn`) REFERENCES `duan` (`MaDuAn`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
