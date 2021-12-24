-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2021 lúc 02:01 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `bday` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `zl` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`id`, `ten`, `bday`, `gender`, `sdt`, `fb`, `zl`, `email`, `cty`) VALUES
(19, 'Nguyễn Văn A', '2021-09-27', 'Nam', '1231232', 'A A', '1331222', 'aaa@gmail.com', 'Dương Phát'),
(20, 'Tran Thi E', '2021-11-07', 'Nữ', '5486887', 'CCC', '14534', 'abc@gmail.com', 'ATB'),
(36, 'Trần Thanh Như', '2021-12-10', 'Nữ', '34234234', 'Như Như', '23424324', 'nhu987@gmail.com', 'Song Phú'),
(38, 'Nguyễn Công Phượng', '2021-12-11', 'Nam', '1231232', 'BB', '14534', 'aaa@gmail.com', 'ATB'),
(45, 'Nguyễn Công Phượng', '2021-12-09', 'Nam', '8788887', 'A A', '23424324', 'aaa@gmail.com', 'CCV'),
(85, 'Phan Thanh Nam', '2021-12-12', 'Nam', '00833744', 'abc', '1331222', 'abc@gmail.com', 'Dương Phát'),
(87, 'Trương Văn Phát', '2021-12-17', 'Nam', '5486887', 'A A', '14534', 'abc@gmail.com', 'PVC'),
(91, 'Lê Ngọc Minh', '2021-11-12', 'Nữ', '98568546', 'MInh Minh', '9094432', 'minh123', 'Vingroup'),
(97, 'Lê Ngọc Minh', '2021-06-10', 'Nữ', '34234234', 'A A', '23424324', 'aaa@gmail.com', 'Dương Phát'),
(99, 'Lê Ngọc Minh', '2021-01-16', 'Nữ', '4009838', 'Minh', '09564846', 'minh456@gmail.com', 'Viettel'),
(101, 'Lê Ngọc Minh', '2021-12-18', 'Nữ', '1231232', 'BB', 'TN', 'aaa@gmail.com', 'ATB'),
(105, 'Nguyễn Công Phượng', '2021-08-15', 'Nam', '00833744', 'abc', '23424324', 'aaa@gmail.com', 'Song Phú'),
(107, 'Phan Thanh Nam', '2021-08-06', 'Nam', '1231232', 'Nam123', '4353522', 'nam456@gmail.com', 'Viett'),
(113, 'Trương Mỹ Phụng', '2017-07-24', 'Nữ', '1231232', 'BB', '1331222', 'aaa@gmail.com', 'Vingroup'),
(119, 'Trương Văn Phát', '2021-12-03', 'Nam', '1231232', 'BB', 'TN', 'abc@gmail.com', 'Song Phú'),
(123, 'Hà Thanh Nhi', '2021-12-16', 'Nữ', '1231232', 'Như Như', '1331222', 'aaa@gmail.com', 'Dương Phát'),
(126, 'Lê Ngọc Minh', '2021-12-10', 'Nữ', '1231232', 'Như Như', '1331222', 'aaa@gmail.com', 'Dương Phát'),
(134, 'Trương Văn Phát', '2021-12-08', 'Nam', '3213213', 'BB', 'TN', 'aaa@gmail.com', 'Vingroup'),
(135, 'Trương Gia Bảo', '2021-12-02', 'Nam', '00833744', 'BB', '23424324', 'abc@gmail.com', 'ATB'),
(136, 'Trương Gia Bảo', '2021-12-02', 'Nam', '00833744', 'BB', '23424324', 'abc@gmail.com', 'ATB'),
(140, 'Trương Gia Bảo', '2021-12-02', 'Nam', '00833744', 'BB', '23424324', 'abc@gmail.com', 'ATB'),
(143, 'Trương Gia Bảo', '2021-12-02', 'Nam', '00833744', 'BB', '23424324', 'abc@gmail.com', 'ATB'),
(145, 'Thạch Thị Hồng', '2021-12-12', 'Nữ', '3213213', 'BB', '1331222', 'abc@gmail.com', 'Song Phú'),
(146, '', '', '', '', '', '', '', ''),
(147, '', '', '', '', '', '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
