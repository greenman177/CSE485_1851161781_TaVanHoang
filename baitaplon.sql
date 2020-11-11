-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2020 lúc 10:14 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitaplon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`postid`, `userid`, `topic`, `author`, `title`, `image`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'SINH VIÊN', 'ADMIN', 'Lưu học sinh sau đại học tham gia học tập thực tế tại Cần Giờ', 'can-gio-0.jpg', 'Chuyến đi cũng đã đưa lưu học sinh đến với khu di tích lịch sử đồng thời là căn cứ trọng điểm thời chống Pháp tại Vàm Sát và Bãi biển Cần Giờ. Hai địa điểm trên cách Thành phố Hồ Chí Minh khoảng 45 km về phía Đông Nam.', '2020-11-03 17:47:15', '2020-11-08 16:05:17'),
(2, 1, 'TIN TRÊN BÁO', 'ADMIN', 'Liên kết đào tạo quốc tế nhìn từ cách làm của Trường Đại học Tôn Đức Thắng!', 'giao-duc-lk-1.jpg', 'Chương trình liên kết quốc tế của Trường Đại học Tôn Đức Thắng thực chất là sinh viên sẽ du học luân chuyển giữa các campus trong hệ thống 10 đại học của UCI.', '2020-11-03 17:50:24', '2020-11-08 15:59:15'),
(3, 1, 'QUAN HỆ CỘNG ĐỒNG', 'ADMIN', 'PVcomBank ký Thỏa thuận hợp tác toàn diện với Đại học Tôn Đức Thắng', 'pvcb-0.jpg', 'PVcomBank cam kết cung cấp các dịch vụ tài chính-ngân hàng với nhiều tiện ích ưu đãi cho giảng viên, viên chức và sinh viên của TDTU; đồng thời, hai bên cam kết triển khai sâu hơn các nội dung hợp tác nghiên cứu,...', '2020-11-03 17:55:41', '2020-11-03 17:59:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `role` enum('Admin','User') COLLATE utf8_bin NOT NULL DEFAULT 'User',
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(60) COLLATE utf8_bin NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp(),
  `activation_code` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `full_name`, `username`, `role`, `email`, `password`, `registration_date`, `activation_code`, `status`) VALUES
(1, 'ADMIN', 'admin', 'Admin', 'tavanhoang@gmail.com', '$2y$10$yKjclCgZdAeJ/mdiV4ATH.7F0uNVFwPDUwBCTHUCrA2yHmgBuSg3q', '2020-10-07 16:40:54', '', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `userid` (`userid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
