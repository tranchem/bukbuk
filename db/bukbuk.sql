-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 21, 2021 lúc 08:58 AM
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
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_booking`
--

INSERT INTO `tbl_booking` (`id_booking`, `id_restaurant`, `time`, `amount`, `name`, `phone_number`, `email`, `status`) VALUES
(1, 1, '2021-03-19 13:44:00.000000', 4, 'aa', 'bb', 'cc@gmail.com', 1),
(2, 1, '2021-03-17 14:56:00.000000', 4, 'aa', 'bb', 'cc@gmail.com', 1),
(3, 2, '2021-03-18 10:35:00.000000', 19, 'Tu Tran Van nha', '0963273254', 'tuvantran.it@gmail.com', 1),
(11, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', 1),
(12, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(13, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(14, 1, '2021-03-18 10:45:00.000000', 8, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(15, 1, '2021-03-18 11:14:00.000000', 18, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(16, 1, '2021-03-18 20:17:00.000000', 2, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(17, 1, '2021-03-17 20:20:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(18, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(19, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(20, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(21, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(22, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(23, 2, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(24, 2, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(25, 2, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(26, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(27, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(28, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(29, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(30, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(31, 1, '0000-00-00 00:00:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(32, 1, '2021-03-18 20:38:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(33, 1, '2021-03-19 10:40:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', NULL),
(34, 2, '2021-03-25 11:23:00.000000', 12, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', 1),
(35, 2, '2021-03-25 11:23:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', 1),
(36, 2, '2021-03-25 11:23:00.000000', 6, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', 1),
(37, 2, '2021-03-25 11:23:00.000000', 1, 'Tu Tran Van', '0963273254', 'tuvantran.it@gmail.com', 0);

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(8) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user_name`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Trần Văn Tú'),
(2, NULL, NULL, NULL);

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
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id_booking` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
