-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 30, 2021 lúc 07:53 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clock`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `STT` int(11) NOT NULL,
  `IDgiohang` int(11) NOT NULL,
  `tennguoimua` varchar(255) NOT NULL,
  `diadiem` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `IDsanpham` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `IDgiohang` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `anhsanpham` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `tensanpham`, `anhsanpham`, `gia`) VALUES
(20, 'Apple watch S3', 'apple-watch-s3-gps-42mm-vien-nhom-day-cao-su-den-org.jpg', 1200000),
(21, 'Apple watch S5', 'apple-watch-s5-44mm-vien-nhom-day-cao-su-trang-1-org.jpg', 15000000),
(22, 'Apple watch S6', 'apple-watch-s6-40mm-vien-nhom-day-cao-su-xanh-cont-1-org.jpg', 20000000),
(23, 'Apple watch S6 Lite', 'apple-watch-s6-lte-44mm-vien-thep-day-thep-vang-cont-1-org.jpg', 15000000),
(24, 'MI band 4', 'mi-band-4-den-2-org.jpg', 500000),
(25, 'MI band 6', 'mi-band-6-1-2-org.jpg', 700000),
(26, 'Oppo watch 41mm', 'oppo-watch-41mm-day-silicone-den-1-org.jpg', 3000000),
(27, 'Oppo watch 41mm (hồng)', 'oppo-watch-41mm-day-silicone-hong-1-org.jpg', 3500000),
(28, 'Oppo watch 46mm', 'oppo-watch-46mm-day-silicone-hong-1-org.jpg', 4000000),
(29, 'Samsung galaxy watch 3 (41mm-bạc)', 'samsung-galaxy-watch-3-41mm-bac-2-org.jpg', 5000000),
(30, 'Samsung galaxy watch 3 (45mm-bạc)', 'samsung-galaxy-watch-3-45mm-bac-2-org.jpg', 4500000),
(31, 'Samsung galaxy watch 4 (40mm-hồng)', 'samsung-galaxy-watch-4-40mm-vang-hong-0-1-org.jpg', 5000000),
(32, 'Samsung galaxy watch 4 lite (40mm)', 'samsung-galaxy-watch-4-lte-40mm1-org.jpg', 2500000),
(33, 'Samsung galaxy watch active 2 (40mm-đen)', 'samsung-galaxy-watch-active-2-40-mm-den-2-org.jpg', 3000000),
(34, 'Samsung galaxy watch 4 lite (42mm-đen)', 'samsung-galaxy-watch-4-lte-classic-42mm1-org.jpg', 2500000),
(35, 'Samsung galaxy watch 4 lite(40mm-đen)', 'samsung-galaxy-watch-4-lte-40mm1-org.jpg', 3500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `ID` int(11) NOT NULL,
  `anhtintuc` varchar(255) NOT NULL,
  `tentintuc` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `thoigian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`ID`, `anhtintuc`, `tentintuc`, `mota`, `thoigian`) VALUES
(2, 'anh3.jpg', 'Chiếc đồng hồ của những CEO quyền lực nhất thế giới', 'Đối với một số doanh nhân, một chiếc đồng hồ đeo tay không chỉ là thiết bị xem giờ. Thực tế, nó là một thông điệp.', '05/07'),
(5, 'anh2.jpg', '12 chiếc đồng hồ dành cho nữ giới đắt giá nhất mọi thời đại', 'Công nghiệp sản xuất đồng hồ sang trọng có dấu hiệu chững lại trong hai năm gần đây do nhu cầu giảm', '20-06'),
(6, 'anh5.jpg', '10 thương hiệu đồng hồ cao cấp hàng đầu mọi quý ông đều quan tâm', 'Được thành lập vào năm 1875 bởi Jules-Louis Audemars và Edward-Auguste Piguet, Audemars Piguet sản xuất ra 36.000', '20-08');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD KEY `giohang` (`IDgiohang`),
  ADD KEY `sanpham` (`IDsanpham`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`IDgiohang`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `IDgiohang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `giohang` FOREIGN KEY (`IDgiohang`) REFERENCES `giohang` (`IDgiohang`),
  ADD CONSTRAINT `sanpham` FOREIGN KEY (`IDsanpham`) REFERENCES `sanpham` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
