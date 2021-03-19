-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 19, 2021 lúc 04:29 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bukbuk`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id_booking` int(8) NOT NULL,
  `id_restaurant` int(8) NOT NULL,
  `time` datetime(6) DEFAULT NULL,
  `amount` int(8) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_booking`
--

INSERT INTO `tbl_booking` (`id_booking`, `id_restaurant`, `time`, `amount`, `name`, `phone_number`, `email`) VALUES
(1, 1, '0000-00-00 00:00:00.000000', 4, 'aa', 'bb', 'cc@gmail.com'),
(2, 1, '2021-03-17 14:56:00.000000', 4, 'aa', 'bb', 'cc@gmail.com'),
(3, 1, '2021-03-18 10:35:00.000000', 18, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(4, 1, '2021-03-18 10:35:00.000000', 18, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(5, 1, '2021-03-18 10:44:00.000000', 15, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(6, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(7, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(8, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(9, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(10, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(11, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(12, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(13, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(14, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(15, 1, '2021-03-18 11:14:00.000000', 18, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(16, 1, '2021-03-18 20:17:00.000000', 2, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(17, 1, '2021-03-17 20:20:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(18, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(19, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(20, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(21, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(22, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(23, 2, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(24, 2, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(25, 2, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(26, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(27, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(28, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(29, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(30, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(31, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com'),
(32, 1, '2021-03-18 20:38:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(8) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(8) NOT NULL,
  `id_menu` int(8) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_restaurant`
--

CREATE TABLE `tbl_restaurant` (
  `id_restaurant` int(8) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_restaurant`
--

INSERT INTO `tbl_restaurant` (`id_restaurant`, `name`) VALUES
(1, 'Buk Buk Aeon Mall Long Biên'),
(2, 'Buk Buk Savico Long Biên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_restaurant` (`id_restaurant`);

--
-- Chỉ mục cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Chỉ mục cho bảng `tbl_restaurant`
--
ALTER TABLE `tbl_restaurant`
  ADD PRIMARY KEY (`id_restaurant`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id_booking` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_restaurant`
--
ALTER TABLE `tbl_restaurant`
  MODIFY `id_restaurant` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `tbl_booking_ibfk_1` FOREIGN KEY (`id_restaurant`) REFERENCES `tbl_restaurant` (`id_restaurant`);

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tbl_menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
