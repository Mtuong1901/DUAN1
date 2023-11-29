-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2023 at 06:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ShopQuanAo`
--

-- --------------------------------------------------------

--
-- Table structure for table `BinhLuan`
--

CREATE TABLE `BinhLuan` (
  `MaBinhLuan` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `MaKhachHang` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `NgayBinhLuan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ChiTietDonHang`
--

CREATE TABLE `ChiTietDonHang` (
  `MaChiTietDH` int(11) NOT NULL,
  `MaDonHang` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ChiTietDonHang`
--

INSERT INTO `ChiTietDonHang` (`MaChiTietDH`, `MaDonHang`, `MaSanPham`, `SoLuong`, `GiaBan`) VALUES
(4, 18, 7, 1, 450000),
(5, 18, 10, 1, 330000),
(6, 19, 14, 1, 370000),
(7, 19, 7, 2, 450000),
(8, 31, 7, 2, 450000),
(9, 31, 11, 4, 550000),
(10, 31, 16, 1, 240000),
(13, 33, 11, 1, 550000),
(14, 33, 6, 2, 400000),
(15, 33, 12, 2, 380000),
(16, 34, 10, 1, 330000),
(17, 34, 15, 2, 360000),
(18, 34, 16, 5, 240000);

-- --------------------------------------------------------

--
-- Table structure for table `DanhMuc`
--

CREATE TABLE `DanhMuc` (
  `MaDanhMuc` int(11) NOT NULL,
  `TenDanhMuc` varchar(100) NOT NULL,
  `HinhAnh` text NOT NULL,
  `TrangThai` varchar(100) NOT NULL DEFAULT 'Đang hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DanhMuc`
--

INSERT INTO `DanhMuc` (`MaDanhMuc`, `TenDanhMuc`, `HinhAnh`, `TrangThai`) VALUES
(1, 'THỜI TRANG NỮ', 'dm_nu.jpeg', 'Đang hoạt động'),
(2, 'THỜI TRANG NAM', 'dm_nam.jpeg', 'Đang hoạt động'),
(3, 'THỜI TRANG TRẺ EM', 'dm_treem.jpeg', 'Đang hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `DonHang`
--

CREATE TABLE `DonHang` (
  `MaDonHang` int(11) NOT NULL,
  `NgayDatHang` datetime NOT NULL DEFAULT current_timestamp(),
  `MaKhachHang` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TrangThai` varchar(100) NOT NULL DEFAULT 'Đang chờ xử lý',
  `GhiChu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DonHang`
--

INSERT INTO `DonHang` (`MaDonHang`, `NgayDatHang`, `MaKhachHang`, `TongTien`, `TrangThai`, `GhiChu`) VALUES
(18, '2023-08-30 09:06:26', 1, 780000, 'Đang chờ xử lý', ''),
(19, '2023-08-30 14:32:09', 2, 1270000, 'Đang chờ xử lý', 'Nhớ chuyển trước 7h'),
(20, '2023-09-07 22:50:47', 1, 450000, 'Đã duyệt đơn hàng', ''),
(21, '2023-09-07 23:10:08', 1, 900000, 'Đang chờ xử lý', ''),
(22, '2023-09-07 23:10:24', 1, 900000, 'Đang giao hàng', ''),
(23, '2023-09-07 23:12:43', 1, 1450000, 'Đã duyệt đơn hàng', ''),
(24, '2023-09-07 23:18:27', 1, 3100000, 'Đã hủy', ''),
(25, '2023-09-07 23:19:16', 1, 3340000, 'Đã giao hàng', ''),
(26, '2023-09-07 23:20:05', 1, 3340000, 'Đang giao hàng', ''),
(27, '2023-09-07 23:21:03', 1, 3340000, 'Đã hủy', ''),
(28, '2023-09-07 23:22:39', 1, 3340000, 'Đã giao hàng', ''),
(29, '2023-09-07 23:34:46', 1, 3340000, 'Đã hủy', ''),
(30, '2023-09-07 23:35:09', 1, 3340000, 'Đã giao hàng', ''),
(31, '2023-09-07 23:36:18', 1, 3340000, 'Đã giao hàng', ''),
(33, '2023-09-24 15:13:45', 2, 2110000, 'Đã giao hàng', ''),
(34, '2023-09-24 15:25:04', 2, 2250000, 'Đang chờ xử lý', '');

-- --------------------------------------------------------

--
-- Table structure for table `KhachHang`
--

CREATE TABLE `KhachHang` (
  `MaKhachHang` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `SDT` varchar(100) DEFAULT NULL,
  `Admin` int(1) NOT NULL DEFAULT 1,
  `Anh` varchar(100) DEFAULT NULL,
  `TrangThai` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `KhachHang`
--

INSERT INTO `KhachHang` (`MaKhachHang`, `Email`, `MatKhau`, `HoTen`, `DiaChi`, `SDT`, `Admin`, `Anh`, `TrangThai`) VALUES
(1, 'hplsolution@gmail.com', '123', 'Lê Phát Hiện', 'HCM', '0925701370', 1, 'hien.jpeg', 1),
(2, 'khachhang@gmail.com', '123', 'Nguyễn Thị Hoa', 'Quận 12, HCM', '0987654321', 0, 'hoa.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `SanPham`
--

CREATE TABLE `SanPham` (
  `MaSanPham` int(10) NOT NULL,
  `TenSanPham` varchar(100) NOT NULL,
  `HinhAnh` text DEFAULT NULL,
  `Gia` int(10) DEFAULT NULL,
  `GiaKhuyenMai` int(10) DEFAULT NULL,
  `MaDanhMuc` int(10) NOT NULL,
  `SoLuong` int(10) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `Hot` int(11) DEFAULT NULL,
  `TrangThai` varchar(100) NOT NULL DEFAULT 'Đang hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `SanPham`
--

INSERT INTO `SanPham` (`MaSanPham`, `TenSanPham`, `HinhAnh`, `Gia`, `GiaKhuyenMai`, `MaDanhMuc`, `SoLuong`, `MoTa`, `Hot`, `TrangThai`) VALUES
(5, 'Váy V1', 'nu_vay_1.webp', 620000, 500000, 1, 100, NULL, 0, 'Đang hoạt động'),
(6, 'Váy V2', 'nu_vay_2.webp', 450000, 400000, 1, 50, NULL, NULL, 'Đang hoạt động'),
(7, 'Váy V3', 'nu_vay_3.webp', 550000, 450000, 1, 50, NULL, 1, 'Đang hoạt động'),
(8, 'Váy V4', 'nu_vay_4.webp', 400000, 350000, 1, 40, NULL, NULL, 'Đang hoạt động'),
(9, 'Áo sơ mi SM1', 'nam_sm_1.webp', 280000, 200000, 2, 30, NULL, 0, 'Đang hoạt động'),
(10, 'Áo sơ mi SM2', 'nam_sm_2.webp', 450000, 330000, 2, 30, NULL, NULL, 'Đang hoạt động'),
(11, 'Áo khoác K1', 'nam_sm_3.webp', 600000, 550000, 2, 10, NULL, 1, 'Đang hoạt động'),
(12, 'Áo thun AT1', 'nam_sm_4.webp', 400000, 380000, 2, 30, NULL, NULL, 'Đang hoạt động'),
(13, 'Váy trẻ em V1', 'treem_vay_1.webp', 300000, 280000, 3, 30, NULL, NULL, 'Đang hoạt động'),
(14, 'Váy trẻ em V2', 'treem_vay_2.webp', 400000, 370000, 3, 40, NULL, 1, 'Đang hoạt động'),
(15, 'Váy trẻ em V3', 'treem_vay_3.webp', 450000, 360000, 3, 50, NULL, NULL, 'Đang hoạt động'),
(16, 'Váy trẻ em V4', 'treem_vay_4.webp', 300000, 240000, 3, 30, NULL, 1, 'Đang hoạt động'),
(22, 'Váy V5', 'nu_vay_5.webp', 400000, 350000, 1, 30, NULL, NULL, 'Đang hoạt động'),
(23, 'Váy V6', 'nu_vay_6.webp', 350000, 250000, 1, NULL, NULL, NULL, 'Đang hoạt động'),
(24, 'Áo sơ mi SM5', 'nam_sm_5.webp', 350000, 200000, 2, 30, NULL, NULL, 'Đang hoạt động'),
(25, 'Áo sơ mi SM6', 'nam_sm_6.webp', 500000, 350000, 2, 20, NULL, NULL, 'Đang hoạt động'),
(26, 'Váy trẻ em V5', 'treem_vay_5.webp', 400000, 300000, 3, 10, NULL, NULL, 'Đang hoạt động'),
(27, 'Váy trẻ em V6', 'treem_vay_6.webp', 300000, 150000, 3, 30, NULL, NULL, 'Đang hoạt động');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BinhLuan`
--
ALTER TABLE `BinhLuan`
  ADD PRIMARY KEY (`MaBinhLuan`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `ChiTietDonHang`
--
ALTER TABLE `ChiTietDonHang`
  ADD PRIMARY KEY (`MaChiTietDH`),
  ADD KEY `MaDonHang` (`MaDonHang`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `DanhMuc`
--
ALTER TABLE `DanhMuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Indexes for table `DonHang`
--
ALTER TABLE `DonHang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Indexes for table `KhachHang`
--
ALTER TABLE `KhachHang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Indexes for table `SanPham`
--
ALTER TABLE `SanPham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BinhLuan`
--
ALTER TABLE `BinhLuan`
  MODIFY `MaBinhLuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ChiTietDonHang`
--
ALTER TABLE `ChiTietDonHang`
  MODIFY `MaChiTietDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `DanhMuc`
--
ALTER TABLE `DanhMuc`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `DonHang`
--
ALTER TABLE `DonHang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `KhachHang`
--
ALTER TABLE `KhachHang`
  MODIFY `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `SanPham`
--
ALTER TABLE `SanPham`
  MODIFY `MaSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BinhLuan`
--
ALTER TABLE `BinhLuan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `KhachHang` (`MaKhachHang`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `SanPham` (`MaSanPham`);

--
-- Constraints for table `ChiTietDonHang`
--
ALTER TABLE `ChiTietDonHang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `DonHang` (`MaDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `SanPham` (`MaSanPham`);

--
-- Constraints for table `DonHang`
--
ALTER TABLE `DonHang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `KhachHang` (`MaKhachHang`);

--
-- Constraints for table `SanPham`
--
ALTER TABLE `SanPham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `DanhMuc` (`MaDanhMuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
