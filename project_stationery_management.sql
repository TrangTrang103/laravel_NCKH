-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2022 lúc 06:53 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_stationery_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `giaodich_id` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `sanpham` int(11) NOT NULL,
  `luong_hang` int(11) NOT NULL DEFAULT 0,
  `tien_hang` decimal(15,3) NOT NULL DEFAULT 0.000,
  `data` text COLLATE utf8_bin DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`giaodich_id`, `id_donhang`, `sanpham`, `luong_hang`, `tien_hang`, `data`, `status`) VALUES
(1, 1, 13, 1, '200000.000', NULL, 0),
(1, 2, 14, 3, '30000.000', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dvvc`
--

CREATE TABLE `dvvc` (
  `id` int(11) NOT NULL,
  `ten_dv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giao_dich`
--

CREATE TABLE `giao_dich` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `user_id` bigint(20) NOT NULL DEFAULT 0,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `user_phone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `amount` decimal(15,3) NOT NULL DEFAULT 0.000,
  `payment` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_info` text COLLATE utf8_bin DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `security` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `giao_dich`
--

INSERT INTO `giao_dich` (`id`, `status`, `user_id`, `user_name`, `user_email`, `user_phone`, `amount`, `payment`, `payment_info`, `message`, `security`, `created`) VALUES
(1, 0, 2, NULL, NULL, NULL, '230000.000', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `KH` bigint(20) NOT NULL,
  `SP` int(11) NOT NULL,
  `soluong_gh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`KH`, `SP`, `soluong_gh`) VALUES
(3, 16, 1),
(3, 14, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `id_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`id_loai`, `ten_loai`, `note`) VALUES
(1, 'Họa cụ', 'Các loại họa cụ'),
(2, 'Tượng vẽ', NULL),
(3, 'Đồ Công Nghệ', NULL),
(4, 'Tài liệu học tập', NULL),
(5, 'Model Kiến Trúc-Đồ Họa-Xây dựng', NULL),
(6, 'Khóa Học', NULL),
(7, 'Sản phẩm của sinh viên', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2022_03_28_185602_create_users_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ql_blog`
--

CREATE TABLE `ql_blog` (
  `id` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tieu_de` text COLLATE utf8_unicode_ci NOT NULL,
  `bai_viet` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` text COLLATE utf8_unicode_ci NOT NULL,
  `loai` int(11) NOT NULL,
  `gia_tien` int(11) NOT NULL,
  `nxb` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_luong` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `loai`, `gia_tien`, `nxb`, `so_luong`, `image`, `note`) VALUES
(1, 'NVIDIA-Quadro-P6000-24GB-Graphics', 3, 2000000, 'NVIDIA', 20, 'NVIDIA-Quadro-P6000-24GB-Graphics.jpg', 'Thông tin sản phẩm\r\n\r\nMã hàng: P6000\r\nBảo hành: 36 Tháng\r\nMô tả sản phẩm\r\n\r\nGPU Memory 24 GB GDDR5X\r\nMemory Interface 384-bit\r\nMemory Bandwidth 432 GB/s\r\nNVIDIA CUDA® Cores 3840\r\nSystem Interface PCI Express 3.0 x16\r\nMax Power Consumption 250 W\r\nThermal Solution Ultra-Quiet Active Fansink\r\nForm Factor 4.4” H × 10.5” L, Dual Slot, Full Height\r\nDisplay Connectors 4x DP 1.2 + DVI-I DL\r\nMax Simultaneous Displays 4 direct, 4 DP 1.2 Multi-Stream'),
(8, 'model-sketchup-thiet-ke-kien-truc-biet-thu-3', 1, 2000000, 'Sketchup', 10, '1648518636-sanpham.jpg', 'Model sketchup thiết kế kiến trúc biệt thự 3 tầng kích thước 17x18m\r\n\r\nBản vẻ thể hiện đẹp hiện đại, chi tiết và đầy đủ nhất tất cả các hạn mục công trình, bản vẻ triển khai chi tiết tỉ mỷ.'),
(9, 'Sách giáo trình khoa học', 4, 35000, 'NXB Giáo dục', 100, 'sachgiaotrinhkh.jpg', 'Sách giáo trình khoa học'),
(12, 'Màu gouache, màu goat (màu wat)', 1, 50000, 'NXB Xây dựng', 100, '1648519453-sanpham.jpg', NULL),
(13, 'Hộp màu fiangfend 650', 1, 200000, 'NXB Giáo dục', 10, '1648519468-sanpham.jpg', NULL),
(14, 'Dao dọc giấy', 1, 10000, 'không', 100, '1648519562-sanpham.jpg', NULL),
(15, 'Tai nghe mèo AS1', 3, 300000, 'không', 10, '1648519644-sanpham.jpg', NULL),
(16, 'VGA 1050TX', 3, 3500000, 'VGA', 7, '1648519723-sanpham.jpg', NULL),
(17, 'Tượng vẽ mã 201-AXEN', 2, 600000, 'NXB Giáo dục', 30, '1648519772-sanpham.webp', NULL),
(18, 'Tai Nghe Sony A1', 3, 1000000, 'Sony', 30, '1648519824-sanpham.webp', NULL),
(19, 'Lịch sử Đảng Cộng Sản', 4, 40000, 'NXB Giáo dục', 20, '1648519882-sanpham.png', NULL),
(20, 'Tượng vẽ mã 202-AXEN', 2, 600000, 'không', 30, '1648519971-sanpham.jpg', NULL),
(21, 'Tượng vẽ mã 208-AXEN', 1, 600000, 'không', 30, '1648520021-sanpham.jpg', NULL),
(22, 'Tượng vẽ mã 209-AXEN', 1, 600000, 'không', 2, '1648520081-sanpham.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_users` bigint(20) NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `createat_users` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_users`, `SDT`, `name`, `dia_chi`, `email`, `password`, `status`, `createat_users`, `updated_at`) VALUES
(1, '098765678', 'Admin', '203 Lý Thường Kiệt -TPHCM ', 'admin@gmail.com', '$2y$10$gJAi/Mv2DU4FjF9n7/mF8uikThCrWNXTzVMx9s7kN7X7sPQc3fz7O', 1, NULL, NULL),
(2, '0984565433', 'Hoa Anh', '12 Hoàng Hoa Thám -TPHCM ', 'hoa@gmail.com', '$2y$10$dQM/d/MSSJibJ2f6Cr.cGuPKyCEddXNSUzzGQKxW9AfisAVt1f3Na', 0, NULL, NULL),
(3, '098345643', 'Member', '20 Hoàn Kiếm -Hà Nội ', 'member@gmail.com', '$2y$10$7UsvnUnhEYG70t4ZKfLX1e1EhKyyBR7fhSoQgG1Ib4Z3D3/dHRU4K', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeu_thich`
--

CREATE TABLE `yeu_thich` (
  `KH` bigint(20) NOT NULL,
  `SP` int(11) NOT NULL,
  `createat_YT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `yeu_thich`
--

INSERT INTO `yeu_thich` (`KH`, `SP`, `createat_YT`) VALUES
(3, 13, '2022-03-29 02:25:57');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `giaodich_id` (`giaodich_id`),
  ADD KEY `sanpham` (`sanpham`);

--
-- Chỉ mục cho bảng `dvvc`
--
ALTER TABLE `dvvc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giao_dich`
--
ALTER TABLE `giao_dich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD KEY `KH` (`KH`,`SP`),
  ADD KEY `SP` (`SP`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id_loai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `ql_blog`
--
ALTER TABLE `ql_blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `loai` (`loai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `yeu_thich`
--
ALTER TABLE `yeu_thich`
  ADD KEY `KH` (`KH`,`SP`),
  ADD KEY `SP` (`SP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `dvvc`
--
ALTER TABLE `dvvc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giao_dich`
--
ALTER TABLE `giao_dich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ql_blog`
--
ALTER TABLE `ql_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_users` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`SP`) REFERENCES `san_pham` (`id_sp`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`KH`) REFERENCES `users` (`id_users`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`loai`) REFERENCES `loai` (`id_loai`);

--
-- Các ràng buộc cho bảng `yeu_thich`
--
ALTER TABLE `yeu_thich`
  ADD CONSTRAINT `yeu_thich_ibfk_1` FOREIGN KEY (`SP`) REFERENCES `san_pham` (`id_sp`),
  ADD CONSTRAINT `yeu_thich_ibfk_2` FOREIGN KEY (`KH`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
